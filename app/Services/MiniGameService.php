<?php

namespace App\Services;

use App\Enums\MiniGameType;
use App\Models\AttemptRiddle;
use App\Models\MiniGame;
use App\Models\MiniGameAttempt;
use Exception;
use Illuminate\Support\Facades\Log;

class MiniGameService
{
    public function generateSessionConfig(MiniGameType $type, string $difficulty = 'medium'): array
    {
        return match($type) {
            default => $this->generatePatternMemoryConfig($difficulty),
        };
    }

    private function generatePatternMemoryConfig(string $difficulty): array
    {
        $lengths = ['easy' => 4, 'medium' => 6, 'hard' => 8];
        $length = $lengths[$difficulty] ?? 6;

        $items = ['key', 'lock', 'flashlight', 'lever', 'bell', 'pendulum'];
        $sequence = [];
        for ($i = 0; $i < $length; $i++) {
            $sequence[] = $items[array_rand($items)];
        }

        return [
            'sequence' => $sequence,
            'speed' => $difficulty === 'easy' ? 1000 : ($difficulty === 'hard' ? 600 : 800),
            'items' => $items,
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
        ];
    }

    public function createMiniGameTemplate(string $difficulty = 'medium'): MiniGame
    {
        return MiniGame::create([
            'name' => 'Pattern Memory',
            'type' => 'pattern_memory',
            'difficulty' => $difficulty,
            'description' => 'Zapamiętaj sekwencję ikon i powtórz ją!',
            'estimated_time' => $difficulty === 'easy' ? 45 : ($difficulty === 'hard' ? 90 : 60),
            'is_core' => true,
            'is_active' => true,
            'play_count' => 0,
        ]);
    }

    public function startMiniGameAttempt(int $miniGameId, ?int $attemptRiddleId = null): MiniGameAttempt
    {
        $miniGame = MiniGame::findOrFail($miniGameId);
        $config = $this->generateSessionConfig(MiniGameType::PatternMemory, $miniGame->difficulty);

        return MiniGameAttempt::create([
            'attempt_riddle_id' => $attemptRiddleId,
            'config' => $config,
            'session_log' => [],
            'start_time' => now(),
            'score' => 0,
            'moves_count' => 0,
            'success' => false,
        ]);
    }

    public function submitMiniGameSolution(int $attemptId, array $solution): array
    {
        $attempt = MiniGameAttempt::findOrFail($attemptId);

        $attemptRiddle = $attempt->attemptRiddle;
        $attemptModel = $attemptRiddle?->attempt;
        $userId = auth()->id();

        if (!$attemptRiddle || !$attemptModel || $attemptModel->user_id !== $userId) {
            abort(404);
        }

        if ($attempt->end_time) {
            throw new Exception('This attempt has already been completed');
        }

        $isCorrect = ($solution['sequence'] ?? []) === ($attempt->config['sequence'] ?? []);

        $attempt->end_time = now();
        $attempt->success = $isCorrect;

        $log = $attempt->session_log ?? [];
        $log[] = $solution;
        $attempt->session_log = $log;

        $attempt->moves_count = ($attempt->moves_count ?? 0) + 1;

        if ($isCorrect) {
            $timeSpent = $attempt->start_time->diffInSeconds($attempt->end_time);
            $baseScore = 100;
            $attempt->score = max(50, $baseScore - ($timeSpent * 2));
        }

        $attempt->save();

        $attemptRiddle = null;
        if ($attempt->attempt_riddle_id) {
            $attemptRiddle = AttemptRiddle::find($attempt->attempt_riddle_id);
            if ($attemptRiddle) {
                if (!$isCorrect) {
                    $attemptRiddle->attempt_number += 1;
                }

                $attemptRiddle->save();
            }
        }

        $attemptsLeft = $attemptRiddle
            ? max(0, $attemptRiddle->max_attempts - $attemptRiddle->attempt_number)
            : null;

        return [
            'success' => $isCorrect,
            'score' => $attempt->score,
            'time_spent' => $timeSpent ?? 0,
            'message' => $isCorrect ? 'Genialnie! Sekwencja poprawna!' : 'Błąd w sekwencji!',
            'attemptsLeft' => $attemptsLeft,
        ];
    }

    public function getOrCreateAttemptRiddle(int $attemptId, int $riddleId, int $maxAttempts = 3): AttemptRiddle
    {
        $attemptRiddle = AttemptRiddle::where('attempt_id', $attemptId)
            ->where('riddle_id', $riddleId)
            ->first();

        if ($attemptRiddle) {
            return $attemptRiddle;
        }

        return AttemptRiddle::create([
            'attempt_id' => $attemptId,
            'riddle_id' => $riddleId,
            'solved' => false,
            'attempt_number' => 0,
            'max_attempts' => $maxAttempts,
        ]);
    }
}