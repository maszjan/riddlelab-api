<?php

namespace Database\Factories;

use App\Models\MiniGameAttempt;
use App\Models\AttemptRiddle;
use Illuminate\Database\Eloquent\Factories\Factory;

class MiniGameAttemptFactory extends Factory
{
    protected $model = MiniGameAttempt::class;

    public function definition(): array
    {
        return [
            'attempt_riddle_id' => AttemptRiddle::factory(),
            'config' => [
                'sequence' => ['key', 'lock', 'flashlight', 'lever'],
                'speed' => 1000,
                'items' => ['key', 'lock', 'flashlight', 'lever', 'bell', 'pendulum'],
                'grid_size' => 3,
                'assets' => [
                    'key' => '/assets/minigames/pattern_memory/key.png',
                    'lock' => '/assets/minigames/pattern_memory/lock.png',
                    'flashlight' => '/assets/minigames/pattern_memory/flashlight.png',
                    'lever' => '/assets/minigames/pattern_memory/lever.png',
                    'bell' => '/assets/minigames/pattern_memory/bell.png',
                    'pendulum' => '/assets/minigames/pattern_memory/pendulum.png',
                    'glow' => '/assets/minigames/pattern_memory/glow.png',
                    'background_1' => '/assets/minigames/pattern_memory/backgrounds/background_1.png',
                    'background_2' => '/assets/minigames/pattern_memory/backgrounds/background_2.png',
                    'background_3' => '/assets/minigames/pattern_memory/backgrounds/background_3.png',
                ],
            ],
            'session_log' => [],
            'start_time' => now(),
            'end_time' => null,
            'score' => 0,
            'moves_count' => 0,
            'success' => false,
        ];
    }
}