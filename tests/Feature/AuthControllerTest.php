<?php

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('user can register with valid data', function () {
    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'Password123@',
        'password_confirmation' => 'Password123@',
        'player_configuration' => [
            'avatar' => [
                'skin_color' => '#f5d0c5',
                'hair_color' => '#2a1b0a',
                'eye_color' => '#3d6e67',
                'outfit_color' => '#4287f5'
            ]
        ]
    ]);

    $response->assertStatus(201);
    $response->assertJsonStructure([
        'message',
        'user' => ['id', 'name', 'email'],
        'token'
    ]);

    $this->assertDatabaseHas('users', [
        'email' => 'john@example.com',
        'name' => 'John Doe',
    ]);

    expect($response->json('user.role'))->toBe(UserRole::User->value);
});

test('register validates required fields', function () {
    $response = $this->postJson('/api/v1/auth/register', []);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'email', 'password']);
});

test('register validates email format', function () {
    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'John Doe',
        'email' => 'invalid-email',
        'password' => 'Password123@',
        'password_confirmation' => 'Password123@',
    ]);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['email']);
});

test('register validates unique email', function () {
    User::factory()->create(['email' => 'existing@example.com']);

    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'John Doe',
        'email' => 'existing@example.com',
        'password' => 'Password123@',
        'password_confirmation' => 'Password123@',
    ]);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['email']);
});

test('register validates password confirmation', function () {
    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'Password123@',
        'password_confirmation' => 'DifferentPassword123@',
    ]);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['password']);
});

test('register requires all player configuration fields', function () {
    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'Password123@',
        'password_confirmation' => 'Password123@',
    ]);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors([
        'player_configuration.avatar.skin_color',
        'player_configuration.avatar.hair_color',
        'player_configuration.avatar.eye_color',
        'player_configuration.avatar.outfit_color',
    ]);
});

test('register validates player configuration colors format', function () {
    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'Password123@',
        'password_confirmation' => 'Password123@',
        'player_configuration' => [
            'avatar' => [
                'skin_color' => 'invalid-color',
                'hair_color' => '#2a1b0a',
                'eye_color' => '#3d6e67',
                'outfit_color' => '#4287f5'
            ]
        ]
    ]);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['player_configuration.avatar.skin_color']);
});

test('register creates token for user', function () {
    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'Password123@',
        'password_confirmation' => 'Password123@',
        'player_configuration' => [
            'avatar' => [
                'skin_color' => '#f5d0c5',
                'hair_color' => '#2a1b0a',
                'eye_color' => '#3d6e67',
                'outfit_color' => '#4287f5'
            ]
        ]
    ]);

    $response->assertStatus(201);
    expect($response->json('token'))->toBeString();
    expect(strlen($response->json('token')))->toBeGreaterThan(20);
});


test('user can login with valid credentials', function () {
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => bcrypt('Password123@'),
    ]);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => 'test@example.com',
        'password' => 'Password123@',
    ]);

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'message',
        'user' => ['id', 'name', 'email'],
        'token'
    ]);

    expect($response->json('user.id'))->toBe($user->id);
});

test('login updates last_login_at timestamp', function () {
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => bcrypt('Password123@'),
        'last_login_at' => null,
    ]);

    $this->postJson('/api/v1/auth/login', [
        'email' => 'test@example.com',
        'password' => 'Password123@',
    ]);

    $user->refresh();
    expect($user->last_login_at)->not->toBeNull();
});

test('login fails with invalid email', function () {
    User::factory()->create([
        'email' => 'test@example.com',
        'password' => bcrypt('Password123@'),
    ]);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => 'wrong@example.com',
        'password' => 'Password123@',
    ]);

    $response->assertStatus(401);
    $response->assertJson([
        'message' => 'Logowanie nie powiodło się',
    ]);
});

test('login fails with invalid password', function () {
    User::factory()->create([
        'email' => 'test@example.com',
        'password' => bcrypt('Password123@'),
    ]);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => 'test@example.com',
        'password' => 'WrongPassword123@',
    ]);

    $response->assertStatus(401);
    $response->assertJson([
        'message' => 'Logowanie nie powiodło się',
    ]);
});

test('login validates required fields', function () {
    $response = $this->postJson('/api/v1/auth/login', []);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['email', 'password']);
});

test('login creates token for user', function () {
    User::factory()->create([
        'email' => 'test@example.com',
        'password' => bcrypt('Password123@'),
    ]);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => 'test@example.com',
        'password' => 'Password123@',
    ]);

    $response->assertStatus(200);
    expect($response->json('token'))->toBeString();
    expect(strlen($response->json('token')))->toBeGreaterThan(20);
});


test('authenticated user can logout', function () {
    $user = User::factory()->create();
    $token = $user->createToken('test-token')->plainTextToken;

    $response = $this->withHeader('Authorization', 'Bearer ' . $token)
        ->postJson('/api/v1/auth/logout');

    $response->assertStatus(200);
    $response->assertJson([
        'message' => 'Wylogowano pomyślnie'
    ]);
});

test('logout deletes current access token', function () {
    $user = User::factory()->create();
    $token = $user->createToken('test-token')->plainTextToken;

    $tokensCountBefore = $user->tokens()->count();

    $this->withHeader('Authorization', 'Bearer ' . $token)
        ->postJson('/api/v1/auth/logout');

    $tokensCountAfter = $user->tokens()->count();

    expect($tokensCountAfter)->toBe($tokensCountBefore - 1);
});

test('logout requires authentication', function () {
    $response = $this->postJson('/api/v1/auth/logout');

    $response->assertStatus(401);
});

test('logout with invalid token fails', function () {
    $response = $this->withHeader('Authorization', 'Bearer invalid-token')
        ->postJson('/api/v1/auth/logout');

    $response->assertStatus(401);
});