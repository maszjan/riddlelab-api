<?php

namespace Database\Factories;

use App\Models\RoomRiddle;
use App\Models\Room;
use App\Models\Riddle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomRiddle>
 */
class RoomRiddleFactory extends Factory
{
    protected $model = RoomRiddle::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::factory(),
            'riddle_id' => Riddle::factory(),
            'position_row' => rand(2, 18),
            'position_col' => rand(2, 28),
            'max_attempts' => 3,
        ];
    }

    public function atPosition(int $row, int $col): static
    {
        return $this->state(fn (array $attributes) => [
            'position_row' => $row,
            'position_col' => $col,
        ]);
    }

    public function centerPosition(): static
    {
        return $this->state(fn (array $attributes) => [
            'position_row' => 10,
            'position_col' => 15,
        ]);
    }

    public function cornerPosition(): static
    {
        return $this->state(fn (array $attributes) => [
            'position_row' => 2,
            'position_col' => 2,
        ]);
    }

    public function unlimitedAttempts(): static
    {
        return $this->state(fn (array $attributes) => [
            'max_attempts' => null,
        ]);
    }

    public function singleAttempt(): static
    {
        return $this->state(fn (array $attributes) => [
            'max_attempts' => 1,
        ]);
    }

    public function multipleAttempts(int $attempts): static
    {
        return $this->state(fn (array $attributes) => [
            'max_attempts' => $attempts,
        ]);
    }
}