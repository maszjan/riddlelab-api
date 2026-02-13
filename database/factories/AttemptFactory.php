<?php

namespace Database\Factories;

use App\Models\Attempt;
use App\Models\User;
use App\Models\EscapeRoom;
use App\Models\Room;
use App\Enums\AttemptStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attempt>
 */
class AttemptFactory extends Factory
{
    protected $model = Attempt::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'escape_room_id' => EscapeRoom::factory(),
            'current_room_id' => null,
            'start_time' => now(),
            'end_time' => null,
            'completed' => false,
            'status' => AttemptStatus::Active,
            'time_spent' => 0,
            'hints_used' => 0,
            'collected_items' => [],
            'score' => 0,
        ];
    }

    public function completed(): static
    {
        return $this->state(fn (array $attributes) => [
            'end_time' => now()->addMinutes(rand(20, 60)),
            'completed' => true,
            'status' => AttemptStatus::Completed,
            'time_spent' => rand(1200, 3600),
            'score' => rand(500, 1000),
        ]);
    }

    public function failed(): static
    {
        return $this->state(fn (array $attributes) => [
            'end_time' => now()->addMinutes(rand(5, 30)),
            'completed' => false,
            'status' => AttemptStatus::Failed,
            'time_spent' => rand(300, 1800),
            'score' => rand(0, 300),
        ]);
    }

    public function abandoned(): static
    {
        return $this->state(fn (array $attributes) => [
            'end_time' => now()->addMinutes(rand(5, 20)),
            'completed' => false,
            'status' => AttemptStatus::Abandoned,
            'time_spent' => rand(300, 1200),
            'score' => 0,
        ]);
    }

    public function paused(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => AttemptStatus::Paused,
            'time_spent' => rand(300, 1800),
        ]);
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => AttemptStatus::Active,
            'end_time' => null,
            'completed' => false,
        ]);
    }

    public function withRoom(): static
    {
        return $this->state(fn (array $attributes) => [
            'current_room_id' => Room::factory(),
        ]);
    }

    public function withHints(): static
    {
        return $this->state(fn (array $attributes) => [
            'hints_used' => rand(1, 5),
        ]);
    }

    public function withCollectedItems(): static
    {
        return $this->state(fn (array $attributes) => [
            'collected_items' => ['key', 'map', 'flashlight'],
        ]);
    }
}