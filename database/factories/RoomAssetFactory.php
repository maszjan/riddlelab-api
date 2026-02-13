<?php

namespace Database\Factories;

use App\Models\RoomAsset;
use App\Models\Room;
use App\Models\Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomAsset>
 */
class RoomAssetFactory extends Factory
{
    protected $model = RoomAsset::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_id' => Room::factory(),
            'asset_id' => Asset::factory(),
            'position_row' => rand(2, 18),
            'position_col' => rand(2, 28),
            'rotation' => $this->faker->randomElement([0, 90, 180, 270]),
        ];
    }

    public function atPosition(int $row, int $col): static
    {
        return $this->state(fn (array $attributes) => [
            'position_row' => $row,
            'position_col' => $col,
        ]);
    }

    public function rotated(int $degrees): static
    {
        return $this->state(fn (array $attributes) => [
            'rotation' => $degrees,
        ]);
    }

    public function noRotation(): static
    {
        return $this->state(fn (array $attributes) => [
            'rotation' => 0,
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
}