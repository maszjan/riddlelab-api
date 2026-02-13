<?php

namespace Database\Factories;

use App\Models\Hint;
use App\Models\Riddle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hint>
 */
class HintFactory extends Factory
{
    protected $model = Hint::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'riddle_id' => Riddle::factory(),
            'hint_text' => $this->faker->sentence(rand(8, 15)),
        ];
    }

    public function subtle(): static
    {
        return $this->state(fn (array $attributes) => [
            'hint_text' => 'Spójrz uważnie na ' . $this->faker->word(),
        ]);
    }

    public function obvious(): static
    {
        return $this->state(fn (array $attributes) => [
            'hint_text' => 'Odpowiedź to: ' . $this->faker->word(),
        ]);
    }
}