<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MiniGame;
use App\Services\MiniGameService;
use Illuminate\Http\Request;

class MiniGameController extends Controller
{
    public function __construct(private MiniGameService $miniGameService) {}

    public function generate(Request $request)
    {
        $request->validate([
            'attempt_id' => 'required|exists:attempts,id',
            'riddle_id' => 'required|exists:riddles,id',
            'difficulty' => 'sometimes|string|in:easy,medium,hard',
        ]);

        $difficulty = $request->difficulty ?? 'medium';
        $miniGame = MiniGame::where('type', 'pattern_memory')
            ->where('difficulty', $difficulty)
            ->where('is_active', true)
            ->first();

        if (!$miniGame) {
            $miniGame = $this->miniGameService->createMiniGameTemplate($difficulty);
        }

        $attemptRiddle = $this->miniGameService->getOrCreateAttemptRiddle(
            $request->attempt_id,
            $request->riddle_id,
            $request->max_attempts ?? 3
        );

        $attempt = $this->miniGameService->startMiniGameAttempt(
            $miniGame->id,
            $attemptRiddle->id
        );

        if (!$attemptRiddle->mini_game_id) {
            $attemptRiddle->mini_game_id = $miniGame->id;
            $attemptRiddle->save();
        }

        return response()->json([
            'id' => $miniGame->id,
            'attempt_id' => $attempt->id,
            'attempt_riddle_id' => $attemptRiddle->id,
            'name' => $miniGame->name,
            'type' => $miniGame->type,
            'difficulty' => $miniGame->difficulty,
            'config' => $attempt->config,
            'estimated_time' => $miniGame->estimated_time,
            'start_time' => $attempt->start_time,
            'max_attempts' => $attemptRiddle->max_attempts,
        ], 201);
    }

    public function submit(Request $request, int $attemptId)
    {
        $request->validate(['solution' => 'required|array']);

        $result = $this->miniGameService->submitMiniGameSolution(
            $attemptId,
            $request->solution
        );

        return response()->json($result);
    }
}