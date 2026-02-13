<?php

use App\Models\Room;
use App\Models\User;
use App\Models\EscapeRoom;
use App\Models\Attempt;
use App\Models\Riddle;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('startAttempt returns game data', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/escape-room/{$escapeRoom->id}/start");
    $response->assertStatus(200);
    $response->assertJsonStructure([
        'attempt' => ['id', 'current_room_id', 'score', 'time_spent', 'hints_used', 'status'],
        'escapeRoom' => ['id', 'name', 'description', 'thumbnail_url', 'soundtrack_url'],
        'rooms',
        'playerConfig',
    ]);
});

test('solveRiddle returns correct result', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id, 'escape_room_id' => $escapeRoom->id]);
    $riddle = Riddle::factory()->create();

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/riddle/solve", [
        'riddle_id' => $riddle->id,
        'answer' => $riddle->answer,
    ]);
    $response->assertStatus(200);
    $response->assertJson(['success' => true]);
});

test('useHint returns hint', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id, 'escape_room_id' => $escapeRoom->id]);
    $riddle = Riddle::factory()->create();

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/riddle/{$riddle->id}/hint");
    $response->assertStatus(200);
    $response->assertJsonStructure(['hint', 'hints_used']);
});

test('nextRoom moves to next room or completes game', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $user->id]);
    $room = Room::factory()->create(['escape_room_id' => $escapeRoom->id]);
    $attempt = Attempt::factory()->create([
        'user_id' => $user->id,
        'escape_room_id' => $escapeRoom->id,
        'current_room_id' => $room->id,
    ]);

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/next-room");
    $response->assertStatus(200);
    $response->assertJsonStructure(['message']);
});
test('updateTime updates time spent', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id, 'escape_room_id' => $escapeRoom->id]);

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/time", [
        'time_spent' => 123,
    ]);
    $response->assertStatus(200);
    $response->assertJson(['success' => true]);
});

test('pauseAttempt pauses the game', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id, 'escape_room_id' => $escapeRoom->id]);

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/pause");
    $response->assertStatus(200);
    $response->assertJson(['message' => 'Game paused']);
});

test('resumeAttempt resumes the game', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id, 'escape_room_id' => $escapeRoom->id, 'status' => 'paused']);

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/resume");
    $response->assertStatus(200);
    $response->assertJson(['message' => 'Game resumed']);
});

test('abandonAttempt abandons the game', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id, 'escape_room_id' => $escapeRoom->id]);

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/abandon");
    $response->assertStatus(200);
    $response->assertJson(['message' => 'Game abandoned']);
});

test('failAttempt fails the game', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id, 'escape_room_id' => $escapeRoom->id]);

    $this->actingAs($user);

    $response = $this->postJson("/api/v1/play/attempt/{$attempt->id}/fail");
    $response->assertStatus(200);
    $response->assertJson(['message' => 'Game failed']);
});

test('getSoundtrack returns soundtrack url', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['soundtrack_url' => 'http://example.com/soundtrack.mp3']);

    $this->actingAs($user);

    $response = $this->getJson("/api/v1/play/escape-room/{$escapeRoom->id}/soundtrack");
    $response->assertStatus(200);
    $response->assertJson(['soundtrack_url' => 'http://example.com/soundtrack.mp3']);
});