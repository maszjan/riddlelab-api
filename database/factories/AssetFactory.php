<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\User;
use App\Enums\AssetType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    protected $model = Asset::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(2),
            'type' => fake()->randomElement(AssetType::cases()),
            'image_url' => 'test-assets/' . fake()->uuid() . '.png',
            'owner_id' => User::factory(),
            'is_public' => fake()->boolean(30),
        ];
    }

    public function public(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_public' => true,
        ]);
    }

    public function private(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_public' => false,
        ]);
    }

    public function prop(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => AssetType::Prop,
        ]);
    }

    public function door(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => AssetType::Door,
        ]);
    }

    public function riddle(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => AssetType::Riddle,
        ]);
    }

    public function floor(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => AssetType::Floor,
        ]);
    }
}