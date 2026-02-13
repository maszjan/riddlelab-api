<?php

namespace Database\Factories;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= bcrypt('password'),
            'remember_token' => Str::random(10),
            'role' => UserRole::User,
            'avatar_url' => null,
            'player_configuration' => [
                'avatar' => [
                    'skin_color' => '#f5d0c5',
                    'hair_color' => '#2a1b0a',
                    'eye_color' => '#3d6e67',
                    'outfit_color' => '#4287f5'
                ]
            ],
            'last_login_at' => null,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => UserRole::Admin,
        ]);
    }

    public function premium(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => UserRole::Premium,
        ]);
    }

    public function withAvatar(): static
    {
        return $this->state(fn (array $attributes) => [
            'avatar_url' => '/storage/avatars/' . fake()->uuid() . '.png',
        ]);
    }

    public function withPlayerConfig(): static
    {
        return $this->state(fn (array $attributes) => [
            'player_configuration' => [
                'avatar' => [
                    'skin_color' => '#' . fake()->hexColor(),
                    'hair_color' => '#' . fake()->hexColor(),
                    'eye_color' => '#' . fake()->hexColor(),
                    'outfit_color' => '#' . fake()->hexColor(),
                ]
            ],
        ]);
    }

    public function recentLogin(): static
    {
        return $this->state(fn (array $attributes) => [
            'last_login_at' => now()->subHours(rand(1, 24)),
        ]);
    }
}