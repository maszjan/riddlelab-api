<?php
use App\Models\User;
use App\Models\Asset;
use App\Models\Attempt;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('getUserAssetLimit returns correct structure', function () {
    $user = User::factory()->create();
    Asset::factory()->count(3)->create(['owner_id' => $user->id]);

    $this->actingAs($user);

    $response = $this->getJson('/api/v1/user/asset/limit');
    $response->assertStatus(200);
    $response->assertJsonStructure([
        'asset_count',
        'asset_limit',
        'asset_percentage',
        'is_unlimited'
    ]);
});

test('getUserStats returns correct stats', function () {
    $user = User::factory()->create();
    Attempt::factory()->count(2)->create(['user_id' => $user->id, 'completed' => true, 'score' => 100]);
    Attempt::factory()->create(['user_id' => $user->id, 'completed' => false, 'score' => 50]);

    $this->actingAs($user);

    $response = $this->getJson('/api/v1/user/stats');
    $response->assertStatus(200);
    $response->assertJson([
        'completed_rooms' => 2,
        'total_score' => 200,
        'average_score' => 100.0,
    ]);
});

test('updateProfile updates user data', function () {
    $user = User::factory()->create(['email' => 'old@example.com']);
    $this->actingAs($user);

    $response = $this->putJson('/api/v1/user/profile', [
        'name' => 'Nowe Imię',
        'email' => 'new@example.com',
    ]);
    $response->assertStatus(200);
    $response->assertJson([
        'message' => 'Profil zaktualizowany pomyślnie',
        'user' => [
            'name' => 'Nowe Imię',
            'email' => 'new@example.com',
        ]
    ]);
});

test('updatePassword changes password', function () {
    $user = User::factory()->create(['password' => bcrypt('oldpassword')]);
    $this->actingAs($user);

    $response = $this->putJson('/api/v1/user/password', [
        'current_password' => 'oldpassword',
        'password' => 'NewPassword123!',
        'password_confirmation' => 'NewPassword123!',
    ]);
    $response->assertStatus(200);
    $response->assertJson(['message' => 'Hasło zmienione pomyślnie']);
});

test('updatePassword fails with wrong current password', function () {
    $user = User::factory()->create(['password' => bcrypt('oldpassword')]);
    $this->actingAs($user);

    $response = $this->putJson('/api/v1/user/password', [
        'current_password' => 'wrongpassword',
        'password' => 'NewPassword123!',
        'password_confirmation' => 'NewPassword123!',
    ]);
    $response->assertStatus(422);
    $response->assertJson(['message' => 'Obecne hasło jest nieprawidłowe']);
});

test('updateAppearance updates player configuration', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $config = [
        'avatar' => [
            'skin_color' => '#ffffff',
            'hair_color' => '#000000',
            'eye_color' => '#123456',
            'outfit_color' => '#abcdef',
        ]
    ];

    $response = $this->putJson('/api/v1/user/appearance', [
        'player_configuration' => $config,
    ]);
    $response->assertStatus(200);
    $response->assertJson([
        'message' => 'Wygląd awatara zaktualizowany pomyślnie',
        'user' => [
            'player_configuration' => $config
        ]
    ]);
});