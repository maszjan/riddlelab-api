<?php


namespace Database\Factories;

use App\Models\EscapeRoom;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscapeRoomFactory extends Factory
{
    protected $model = EscapeRoom::class;

    public function definition(): array
    {
        $thumbnails = [
            'rl-app-2.png',
            'rl-app-3.png',
            'rl-app-4.png',
        ];

        $soundtracks = [
            '2c23a7e1-23c1-41ca-9101-278214e259f0.mp3',
            '3e43d40a-dbed-45a8-8265-f65bbe1944f0.mp3',
            'a7e4d623-fcef-4666-a4b9-f8925515e479.mp3',
        ];

        return [
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->sentence(10),
            'thumbnail_url' => '/storage/escape-rooms/thumbnails/' . $this->faker->randomElement($thumbnails),
            'soundtrack_url' => '/storage/escape-rooms/soundtracks/' . $this->faker->randomElement($soundtracks),
            'is_public' => $this->faker->boolean(70), 
            'user_id' => User::factory(),
        ];
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_public' => true,
        ]);
    }

    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_public' => false,
        ]);
    }
}