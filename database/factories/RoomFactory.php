<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\EscapeRoom;
use App\Models\Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'escape_room_id' => EscapeRoom::factory(),
            'grid_data' => $this->generateGridData(),
            'walls_data' => ['wallColor' => '#888888'],
            'wall_color' => '#888888',
            'wall_thickness' => rand(15, 25),
            'floor_texture_id' => Asset::factory()->floor()->create()->id,
            'starting_point_row' => 5,
            'starting_point_col' => 5,
            'floor_accepted' => true,
            'door_asset_id' => null,
            'door_position' => null,
        ];
    }

    private function generateGridData(): array
    {
        $gridData = [];

        for ($row = 2; $row <= 18; $row++) {
            for ($col = 2; $col <= 28; $col++) {
                $key = "{$row}-{$col}";
                $gridData[$key] = "1";
            }
        }

        return $gridData;
    }

    public function withDoor(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'door_asset_id' => Asset::factory()->door()->create()->id,
                'door_position' => ['row' => 10, 'col' => 10, 'rotation' => 0],
            ];
        });
    }

    public function withCustomWallColor(string $color): static
    {
        return $this->state(fn (array $attributes) => [
            'wall_color' => $color,
            'walls_data' => ['wallColor' => $color],
        ]);
    }

    public function darkWalls(): static
    {
        return $this->state(fn (array $attributes) => [
            'wall_color' => '#1e1515',
            'walls_data' => ['wallColor' => '#1e1515'],
        ]);
    }

    public function complexLayout(): static
    {
        return $this->state(function (array $attributes) {
            $gridData = [];

            for ($row = 3; $row <= 17; $row++) {
                for ($col = 3; $col <= 27; $col++) {
                    $key = "{$row}-{$col}";
                    $gridData[$key] = "1";
                }
            }

            return [
                'grid_data' => $gridData,
                'starting_point_row' => 10,
                'starting_point_col' => 15,
            ];
        });
    }

    public function accepted(): static
    {
        return $this->state(fn (array $attributes) => [
            'floor_accepted' => true,
        ]);
    }

    public function notAccepted(): static
    {
        return $this->state(fn (array $attributes) => [
            'floor_accepted' => false,
        ]);
    }

    public function withFloorTexture(): static
    {
        return $this->state(fn (array $attributes) => [
            'floor_texture_id' => Asset::factory()->floor()->create()->id,
        ]);
    }

    public function thickWalls(): static
    {
        return $this->state(fn (array $attributes) => [
            'wall_thickness' => 25,
        ]);
    }

    public function thinWalls(): static
    {
        return $this->state(fn (array $attributes) => [
            'wall_thickness' => 15,
        ]);
    }
}