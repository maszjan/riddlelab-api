<?php

namespace Database\Factories;

use App\Models\Riddle;
use App\Models\User;
use App\Models\Hint;
use App\Enums\RiddleType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Riddle>
 */
class RiddleFactory extends Factory
{
    protected $model = Riddle::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creator_id' => User::factory(),
            'name' => $this->faker->words(3, true),
            'type' => $this->faker->randomElement(RiddleType::cases()),
            'question' => $this->faker->sentence(10) . '?',
            'answer' => $this->faker->word(),
            'points' => rand(10, 100),
        ];
    }

    public function knowledge(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => RiddleType::Knowledge,
            'question' => 'Jakie jest największe jezioro w Polsce?',
            'answer' => 'śniardwy',
        ]);
    }

    public function math(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => RiddleType::Math,
            'question' => 'Ile to 2 + 2 * 2?',
            'answer' => '6',
        ]);
    }

    public function language(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => RiddleType::Language,
            'question' => 'Jak nazywa się słowo, które brzmi tak samo od przodu i od tyłu?',
            'answer' => 'palindrom',
        ]);
    }

    public function cypher(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => RiddleType::Cypher,
            'question' => 'Odszyfruj: IFMMP (przesunięcie o 1)',
            'answer' => 'hello',
        ]);
    }

    public function puzzleGame(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => RiddleType::PuzzleGame,
            'question' => 'Ułóż obrazek aby odkryć hasło',
            'answer' => 'tajemnica',
        ]);
    }

    public function easy(): static
    {
        return $this->state(fn (array $attributes) => [
            'points' => rand(10, 30),
        ]);
    }

    public function hard(): static
    {
        return $this->state(fn (array $attributes) => [
            'points' => rand(70, 100),
        ]);
    }

    public function withHints(): static
    {
        return $this->afterCreating(function (Riddle $riddle) {
            Hint::factory()->count(rand(1, 3))->create([
                'riddle_id' => $riddle->id,
            ]);
        });
    }
}