<?php

namespace Database\Factories;

use App\Models\Leaderboard;
use App\Models\EscapeRoom;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leaderboard>
 */
class LeaderboardFactory extends Factory
{
    protected $model = Leaderboard::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'escape_room_id' => EscapeRoom::factory(),
            'user_id' => User::factory(),
            'completion_time' => rand(600, 3600),
            'hints_used' => rand(0, 5),
            'attempt_count' => rand(1, 3),
            'position' => null,
        ];
    }

    public function topPosition(): static
    {
        return $this->state(fn (array $attributes) => [
            'position' => rand(1, 3),
            'completion_time' => rand(600, 1200), // Fast time
            'hints_used' => 0,
            'attempt_count' => 1,
        ]);
    }

    public function firstPlace(): static
    {
        return $this->state(fn (array $attributes) => [
            'position' => 1,
            'completion_time' => rand(600, 900),
            'hints_used' => 0,
            'attempt_count' => 1,
        ]);
    }

    public function withHints(): static
    {
        return $this->state(fn (array $attributes) => [
            'hints_used' => rand(3, 5),
            'completion_time' => rand(1800, 3600),
        ]);
    }

    public function multipleAttempts(): static
    {
        return $this->state(fn (array $attributes) => [
            'attempt_count' => rand(2, 5),
        ]);
    }
}