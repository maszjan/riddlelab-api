<?php
use App\Models\AttemptRiddle;
use App\Models\User;
use App\Models\MiniGame;
use App\Models\MiniGameAttempt;
use App\Models\Attempt;
use App\Models\Riddle;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('generate returns 201 and correct structure', function () {
    $user = User::factory()->create();
    $attempt = Attempt::factory()->create();
    $riddle = Riddle::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/mini-game/generate', [
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'difficulty' => 'easy',
    ]);

    $response->assertStatus(201);
    $response->assertJsonStructure([
        'id',
        'attempt_id',
        'attempt_riddle_id',
        'name',
        'type',
        'difficulty',
        'config',
        'estimated_time',
        'start_time',
        'max_attempts',
    ]);
});

test('generate creates new minigame if not exists', function () {
    $user = User::factory()->create();
    $attempt = Attempt::factory()->create();
    $riddle = Riddle::factory()->create();

    expect(MiniGame::where('type', 'pattern_memory')->where('difficulty', 'hard')->count())->toBe(0);

    $response = $this->actingAs($user)->postJson('/api/v1/mini-game/generate', [
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'difficulty' => 'hard',
    ]);

    $response->assertStatus(201);

    expect(MiniGame::where('type', 'pattern_memory')->where('difficulty', 'hard')->count())->toBe(1);
});

test('generate uses existing minigame if present', function () {
    $user = User::factory()->create();
    $attempt = Attempt::factory()->create();
    $riddle = Riddle::factory()->create();

    $minigame = MiniGame::factory()->create([
        'type' => 'pattern_memory',
        'difficulty' => 'medium',
        'is_active' => true,
    ]);

    $response = $this->actingAs($user)->postJson('/api/v1/mini-game/generate', [
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'difficulty' => 'medium',
    ]);

    $response->assertStatus(201);
    $response->assertJson(['id' => $minigame->id]);
});

test('generate validates required fields', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->postJson('/api/v1/mini-game/generate', []);
    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['attempt_id', 'riddle_id']);
});

test('generate validates difficulty', function () {
    $user = User::factory()->create();
    $attempt = Attempt::factory()->create();
    $riddle = Riddle::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/mini-game/generate', [
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'difficulty' => 'invalid',
    ]);
    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['difficulty']);
});


test('submit returns correct result for correct solution', function () {
    $user = User::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id]);
    $riddle = Riddle::factory()->create();

    $this->actingAs($user)->postJson('/api/v1/mini-game/generate', [
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'difficulty' => 'easy',
    ]);

    $miniGameAttempt = MiniGameAttempt::whereHas('attemptRiddle.attempt', function ($q) use ($user) {
        $q->where('user_id', $user->id);
    })->latest()->first();

    $sequence = $miniGameAttempt->config['sequence'];

    $submitResponse = $this->actingAs($user)->postJson("/api/v1/mini-game/attempt/{$miniGameAttempt->id}/submit", [
        'solution' => ['sequence' => $sequence],
    ]);

    $submitResponse->assertStatus(200);
    $submitResponse->assertJson([
        'success' => true,
        'message' => 'Genialnie! Sekwencja poprawna!',
    ]);
});

test('submit returns correct result for wrong solution', function () {
    $user = User::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id]);
    $riddle = Riddle::factory()->create();

    $this->actingAs($user)->postJson('/api/v1/mini-game/generate', [
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'difficulty' => 'easy',
    ]);

    $miniGameAttempt = MiniGameAttempt::whereHas('attemptRiddle.attempt', function ($q) use ($user) {
        $q->where('user_id', $user->id);
    })->latest()->first();

    $sequence = $miniGameAttempt->config['sequence'];
    $wrongSequence = $sequence;
    $wrongSequence[0] = $wrongSequence[0] === 'key' ? 'lock' : 'key';

    $response = $this->actingAs($user)->postJson("/api/v1/mini-game/attempt/{$miniGameAttempt->id}/submit", [
        'solution' => ['sequence' => $wrongSequence],
    ]);

    $response->assertStatus(200);
    $response->assertJson([
        'success' => false,
        'message' => 'Błąd w sekwencji!',
    ]);
});

test('submit validates solution is required', function () {
    $user = User::factory()->create();
    $attempt = Attempt::factory()->create(['user_id' => $user->id]);
    $riddle = Riddle::factory()->create();

    $this->actingAs($user)->postJson('/api/v1/mini-game/generate', [
        'attempt_id' => $attempt->id,
        'riddle_id' => $riddle->id,
        'difficulty' => 'easy',
    ]);

    $miniGameAttempt = MiniGameAttempt::whereHas('attemptRiddle.attempt', function ($q) use ($user) {
        $q->where('user_id', $user->id);
    })->latest()->first();

    $response = $this->actingAs($user)->postJson("/api/v1/mini-game/attempt/{$miniGameAttempt->id}/submit", []);
    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['solution']);
});

test('submit returns 404 for non-existent attempt', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->postJson('/api/v1/mini-game/submit/999999', [
        'solution' => ['sequence' => []],
    ]);
    $response->assertStatus(404);
});