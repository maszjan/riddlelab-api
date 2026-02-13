<?php

namespace Database\Factories;

use App\Models\AttemptRiddle;
use App\Models\Attempt;
use App\Models\Riddle;
use App\Models\MiniGame;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttemptRiddle>
 */
class AttemptRiddleFactory extends Factory
{
    protected $model = AttemptRiddle::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'attempt_id' => Attempt::factory(),
            'riddle_id' => Riddle::factory(),
            'solved' => false,
            'time_to_solve' => null,
            'attempt_number' => 0,
            'max_attempts' => 3,
            'mini_game_id' => null,
        ];
    }

    public function solved(): static
    {
        return $this->state(fn (array $attributes) => [
            'solved' => true,
            'time_to_solve' => rand(30, 300), // 30 seconds to 5 minutes
            'attempt_number' => rand(1, 3),
        ]);
    }

    public function unsolved(): static
    {
        return $this->state(fn (array $attributes) => [
            'solved' => false,
            'time_to_solve' => null,
            'attempt_number' => rand(1, 3),
        ]);
    }

    public function withMiniGame(): static
    {
        return $this->state(fn (array $attributes) => [
            'mini_game_id' => MiniGame::factory(),
        ]);
    }

    public function firstAttempt(): static
    {
        return $this->state(fn (array $attributes) => [
            'attempt_number' => 1,
        ]);
    }

    public function maxedOut(): static
    {
        return $this->state(fn (array $attributes) => [
            'attempt_number' => 3,
            'max_attempts' => 3,
            'solved' => false,
        ]);
    }
}