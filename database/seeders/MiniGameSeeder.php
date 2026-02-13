<?php

namespace Database\Seeders;

use App\Enums\MiniGameType;
use App\Models\MiniGame;
use App\Services\MiniGameService;
use Illuminate\Database\Seeder;

class MiniGameSeeder extends Seeder
{
    public function run(MiniGameService $miniGameService): void
    {
        $coreGames = [
            [
                'name' => 'Zapamiętaj sekwencje',
                'type' => MiniGameType::PatternMemory,
                'difficulty' => 'medium',
            ],
            [
                'name' => 'Awaryjne oświetlenie',
                'type' => MiniGameType::CircuitPuzzle,
                'difficulty' => 'easy',
            ],
            [
                'name' => 'Sejf laserowy',
                'type' => MiniGameType::LaserPuzzle,
                'difficulty' => 'medium',
            ],
        ];

        foreach ($coreGames as $gameData) {
            $existing = MiniGame::where('name', $gameData['name'])->first();

                MiniGame::create([
                    'name' => $gameData['name'],
                    'type' => $gameData['type']->value,
                    'difficulty' => $gameData['difficulty'],
                    'is_core' => true,
                    'is_active' => true,
                    'description' => $gameData['type']->label(),
                    'estimated_time' => $gameData['type']->estimatedTime(),
                ]);
            }
        }

}
