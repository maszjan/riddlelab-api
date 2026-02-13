<?php

use App\Models\User;
use App\Models\EscapeRoom;
use App\Models\Attempt;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('authenticated user can get global leaderboard', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 850,
        'hints_used' => 2,
        'time_spent' => 1800,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard');

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'data' => [
            '*' => [
                'position',
                'user' => ['id', 'name', 'player_configuration'],
                'total_score',
                'total_completed',
                'total_hints',
                'best_time',
            ]
        ],
        'current_page',
        'last_page',
        'total',
        'per_page',
    ]);
});

test('global leaderboard requires authentication', function () {
    $response = $this->getJson('/api/v1/leaderboard');

    $response->assertStatus(401);
});

test('global leaderboard orders by total score descending', function () {
    $user = User::factory()->create();

    $user1 = User::factory()->create();
    $user2 = User::factory()->create();
    $user3 = User::factory()->create();

    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $user1->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $user2->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 1000,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $user3->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 750,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard');

    $response->assertStatus(200);

    $data = $response->json('data');
    expect($data[0]['user']['id'])->toBe($user2->id);
    expect($data[1]['user']['id'])->toBe($user3->id);
    expect($data[2]['user']['id'])->toBe($user1->id);
});

test('global leaderboard shows correct positions', function () {
    $user = User::factory()->create();

    $users = User::factory()->count(3)->create();
    $escapeRoom = EscapeRoom::factory()->create();

    foreach ($users as $index => $u) {
        Attempt::factory()->completed()->create([
            'user_id' => $u->id,
            'escape_room_id' => $escapeRoom->id,
            'score' => 1000 - ($index * 100),
        ]);
    }

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard');

    $response->assertStatus(200);

    $data = $response->json('data');
    expect($data[0]['position'])->toBe(1);
    expect($data[1]['position'])->toBe(2);
    expect($data[2]['position'])->toBe(3);
});

test('global leaderboard aggregates multiple attempts per user', function () {
    $user = User::factory()->create();
    $targetUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 300,
        'hints_used' => 1,
        'time_spent' => 1200,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
        'hints_used' => 2,
        'time_spent' => 1800,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 200,
        'hints_used' => 0,
        'time_spent' => 900,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard');

    $response->assertStatus(200);

    $data = $response->json('data.0');
    expect($data['total_score'])->toBe(1000);
    expect($data['total_completed'])->toBe(3);
    expect($data['total_hints'])->toBe(3);
    expect($data['best_time'])->toBe(900);
});

test('global leaderboard only includes completed attempts', function () {
    $user = User::factory()->create();
    $targetUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
    ]);

    Attempt::factory()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'completed' => false,
        'score' => 1000,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard');

    $response->assertStatus(200);

    $data = $response->json('data.0');
    expect($data['total_score'])->toBe(500);
    expect($data['total_completed'])->toBe(1);
});

test('global leaderboard can filter by daily', function () {
    $user = User::factory()->create();
    $targetUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
        'created_at' => today(),
    ]);

    // Yesterday's attempt
    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 1000,
        'created_at' => today()->subDay(),
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard?filter=daily');

    $response->assertStatus(200);

    $data = $response->json('data.0');
    expect($data['total_score'])->toBe(500);
});

test('global leaderboard can filter by weekly', function () {
    $user = User::factory()->create();
    $targetUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
        'created_at' => now()->startOfWeek()->addDay(),
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 1000,
        'created_at' => now()->startOfWeek()->subWeek(),
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard?filter=weekly');

    $response->assertStatus(200);

    $data = $response->json('data.0');
    expect($data['total_score'])->toBe(500); // Only this week's attempt
});

test('global leaderboard can search by user name', function () {
    $user = User::factory()->create();

    $john = User::factory()->create(['name' => 'John Doe']);
    $jane = User::factory()->create(['name' => 'Jane Smith']);

    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $john->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $jane->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 600,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard?search=John');

    $response->assertStatus(200);

    $data = $response->json('data');
    expect(count($data))->toBe(1);
    expect($data[0]['user']['name'])->toBe('John Doe');
});

test('global leaderboard is paginated', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $users = User::factory()->count(25)->create();
    foreach ($users as $u) {
        Attempt::factory()->completed()->create([
            'user_id' => $u->id,
            'escape_room_id' => $escapeRoom->id,
        ]);
    }

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard');

    $response->assertStatus(200);
    expect($response->json('per_page'))->toBe(20);
    expect(count($response->json('data')))->toBe(20);
    expect($response->json('total'))->toBe(25);
});

test('global leaderboard returns empty when no completed attempts', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->getJson('/api/v1/leaderboard');

    $response->assertStatus(200);
    expect($response->json('data'))->toBeArray();
    expect(count($response->json('data')))->toBe(0);
});


test('authenticated user can get room leaderboard', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 850,
    ]);

    $response = $this->actingAs($user)->getJson("/api/v1/leaderboard/room/{$escapeRoom->id}");

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'data' => [
            '*' => [
                'position',
                'user' => ['id', 'name', 'player_configuration'],
                'total_score',
                'total_completed',
                'total_hints',
                'best_time',
            ]
        ],
        'current_page',
        'last_page',
        'total',
        'per_page',
    ]);
});

test('room leaderboard requires authentication', function () {
    $escapeRoom = EscapeRoom::factory()->create();

    $response = $this->getJson("/api/v1/leaderboard/room/{$escapeRoom->id}");

    $response->assertStatus(401);
});

test('room leaderboard only shows attempts for specific room', function () {
    $user = User::factory()->create();
    $targetUser = User::factory()->create();

    $room1 = EscapeRoom::factory()->create();
    $room2 = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $room1->id,
        'score' => 500,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $room2->id,
        'score' => 1000,
    ]);

    $response = $this->actingAs($user)->getJson("/api/v1/leaderboard/room/{$room1->id}");

    $response->assertStatus(200);

    $data = $response->json('data.0');
    expect($data['total_score'])->toBe(500);
});

test('room leaderboard orders by total score descending', function () {
    $user = User::factory()->create();

    $user1 = User::factory()->create();
    $user2 = User::factory()->create();

    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $user1->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 300,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $user2->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 900,
    ]);

    $response = $this->actingAs($user)->getJson("/api/v1/leaderboard/room/{$escapeRoom->id}");

    $response->assertStatus(200);

    $data = $response->json('data');
    expect($data[0]['user']['id'])->toBe($user2->id);
    expect($data[1]['user']['id'])->toBe($user1->id);
});

test('room leaderboard can filter by daily', function () {
    $user = User::factory()->create();
    $targetUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
        'created_at' => today(),
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $targetUser->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 1000,
        'created_at' => today()->subDay(),
    ]);

    $response = $this->actingAs($user)->getJson("/api/v1/leaderboard/room/{$escapeRoom->id}?filter=daily");

    $response->assertStatus(200);

    $data = $response->json('data.0');
    expect($data['total_score'])->toBe(500);
});

test('room leaderboard can search by user name', function () {
    $user = User::factory()->create();

    $john = User::factory()->create(['name' => 'John Doe']);
    $jane = User::factory()->create(['name' => 'Jane Smith']);

    $escapeRoom = EscapeRoom::factory()->create();

    Attempt::factory()->completed()->create([
        'user_id' => $john->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 500,
    ]);

    Attempt::factory()->completed()->create([
        'user_id' => $jane->id,
        'escape_room_id' => $escapeRoom->id,
        'score' => 600,
    ]);

    $response = $this->actingAs($user)->getJson("/api/v1/leaderboard/room/{$escapeRoom->id}?search=Jane");

    $response->assertStatus(200);

    $data = $response->json('data');
    expect(count($data))->toBe(1);
    expect($data[0]['user']['name'])->toBe('Jane Smith');
});

test('room leaderboard returns empty for room with no attempts', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();

    $response = $this->actingAs($user)->getJson("/api/v1/leaderboard/room/{$escapeRoom->id}");

    $response->assertStatus(200);
    expect($response->json('data'))->toBeArray();
    expect(count($response->json('data')))->toBe(0);
});