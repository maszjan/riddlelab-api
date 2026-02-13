<?php

namespace Database\Factories;

use App\Enums\MiniGameType;
use App\Models\MiniGame;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MiniGame>
 */
class MiniGameFactory extends Factory
{
    protected $model = MiniGame::class;

    public function definition(): array
{
        $type = collect(MiniGameType::cases())->random()->value;
        $difficulty = $this->faker->randomElement(['easy', 'medium', 'hard']);

        return [
            'name' => $this->faker->words(3, true) . ' Puzzle',
            'type' => $type,
            'difficulty' => $difficulty,
            'is_core' => false,
            'is_active' => true,
            'description' => $this->faker->sentence(8),
            'estimated_time' => MiniGameType::from($type)->estimatedTime(),
            'play_count' => 0,
        ];
    }

    public function core(): static
    {
        return $this->state(fn () => [
            'is_core' => true,
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn () => [
            'is_active' => false,
        ]);
    }

    public function easy(): static
    {
        return $this->state(fn () => [
            'difficulty' => 'easy',
            'estimated_time' => 45,
        ]);
    }

    public function medium(): static
    {
        return $this->state(fn () => [
            'difficulty' => 'medium',
            'estimated_time' => 60,
        ]);
    }

    public function hard(): static
    {
        return $this->state(fn () => [
            'difficulty' => 'hard',
            'estimated_time' => 90,
        ]);
    }

    public function popular(): static
    {
        return $this->state(fn () => [
            'play_count' => rand(100, 1000),
        ]);
    }
}