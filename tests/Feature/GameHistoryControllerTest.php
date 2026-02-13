<?php

use App\Models\User;
use App\Models\EscapeRoom;
use App\Models\Attempt;
use App\Models\AttemptRiddle;
use App\Models\Riddle;
use App\Enums\AttemptStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('user can get their game history', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $attempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'completed' => true,
        'time_spent' => 1800,
        'hints_used' => 2,
        'score' => 850,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'data' => [
            '*' => [
                'attempt_id',
                'escape_room' => ['id', 'name', 'description', 'thumbnail_url'],
                'start_time',
                'end_time',
                'completed',
                'time_spent',
                'hints_used',
                'score',
                'status',
                'riddles',
            ]
        ],
        'current_page',
        'last_page',
        'total',
    ]);

    expect($response->json('data.0.attempt_id'))->toBe($attempt->id);
    expect($response->json('data.0.completed'))->toBe(true);
    expect($response->json('data.0.time_spent'))->toBe(1800);
    expect($response->json('data.0.hints_used'))->toBe(2);
    expect($response->json('data.0.score'))->toBe(850);
});

test('user only sees their own game history', function () {
    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $escapeRoom = EscapeRoom::factory()->create();

    $myAttempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
    ]);

    $otherAttempt = Attempt::factory()->create([
        'user_id' => $otherUser->id,
        'escape_room_id' => $escapeRoom->id,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);

    $attemptIds = collect($response->json('data'))->pluck('attempt_id')->toArray();
    expect($attemptIds)->toContain($myAttempt->id);
    expect($attemptIds)->not->toContain($otherAttempt->id);
});

test('game history requires authentication', function () {
    $response = $this->getJson('/api/v1/game-history');

    $response->assertStatus(401);
});

test('game history is paginated', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->count(15)->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    expect($response->json('total'))->toBe(15);
    expect(count($response->json('data')))->toBe(10);
});

test('game history shows latest attempts first', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $oldAttempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'created_at' => now()->subDays(5),
    ]);

    $newAttempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'created_at' => now(),
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    expect($response->json('data.0.attempt_id'))->toBe($newAttempt->id);
    expect($response->json('data.1.attempt_id'))->toBe($oldAttempt->id);
});

test('game history includes escape room details', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create([
        'name' => 'Test Escape Room',
        'description' => 'Test Description',
        'thumbnail_url' => '/storage/test.png',
    ]);

    Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    expect($response->json('data.0.escape_room.id'))->toBe($escapeRoom->id);
    expect($response->json('data.0.escape_room.name'))->toBe('Test Escape Room');
    expect($response->json('data.0.escape_room.description'))->toBe('Test Description');
    expect($response->json('data.0.escape_room.thumbnail_url'))->toBe('/storage/test.png');
});

test('game history includes riddle attempts', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $attempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
    ]);

    $riddle = Riddle::factory()->create(['question' => 'What is 2+2?']);

    AttemptRiddle::factory()->create([
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'solved' => true,
        'time_to_solve' => 120,
        'attempt_number' => 2,
        'max_attempts' => 3,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);

    $riddles = $response->json('data.0.riddles');
    expect($riddles)->toHaveCount(1);
    expect($riddles[0]['riddle_id'])->toBe($riddle->id);
    expect($riddles[0]['question'])->toBe('What is 2+2?');
    expect($riddles[0]['solved'])->toBe(true);
    expect($riddles[0]['time_to_solve'])->toBe(120);
    expect($riddles[0]['attempt_number'])->toBe(2);
    expect($riddles[0]['max_attempts'])->toBe(3);
});

test('game history shows completed vs incomplete attempts', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $completedAttempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'completed' => true,
        'end_time' => now(),
    ]);

    $incompleteAttempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'completed' => false,
        'end_time' => null,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);

    $data = collect($response->json('data'));
    $completed = $data->firstWhere('attempt_id', $completedAttempt->id);
    $incomplete = $data->firstWhere('attempt_id', $incompleteAttempt->id);

    expect($completed['completed'])->toBe(true);
    expect($incomplete['completed'])->toBe(false);
});

test('game history handles attempts with no riddles', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    expect($response->json('data.0.riddles'))->toBeArray();
    expect($response->json('data.0.riddles'))->toHaveCount(0);
});

test('game history returns empty array when user has no attempts', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    expect($response->json('data'))->toBeArray();
    expect($response->json('data'))->toHaveCount(0);
    expect($response->json('total'))->toBe(0);
});

test('game history includes attempt status', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $attempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'status' => AttemptStatus::Completed,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    expect($response->json('data.0.status'))->toBe(AttemptStatus::Completed->value);
});

test('game history includes start and end times', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $startTime = now()->subHour();
    $endTime = now();

    Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'start_time' => $startTime,
        'end_time' => $endTime,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/game-history');

    $response->assertStatus(200);
    expect($response->json('data.0.start_time'))->not->toBeNull();
    expect($response->json('data.0.end_time'))->not->toBeNull();
});