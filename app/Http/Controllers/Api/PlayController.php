<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\GameService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    protected GameService $gameService;

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    public function startAttempt(int $escapeRoomId): JsonResponse
    {
        try {
            $gameData = $this->gameService->startAttempt($escapeRoomId, auth()->id());
            return response()->json($gameData);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function solveRiddle(int $attemptId, Request $request): JsonResponse
    {
        $validated = $request->validate([
            'riddle_id' => 'required|exists:riddles,id',
            'answer' => 'required|string',
        ]);

        try {
            $result = $this->gameService->solveRiddle(
                $attemptId,
                $validated['riddle_id'],
                $validated['answer'],
                auth()->id()
            );

            $statusCode = $result['success'] ? 200 : 400;
            return response()->json($result, $statusCode);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function useHint(int $attemptId, int $riddleId): JsonResponse
    {
        try {
            $result = $this->gameService->useHint($attemptId, $riddleId, auth()->id());
            return response()->json($result);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function nextRoom(int $attemptId): JsonResponse
    {
        try {
            $result = $this->gameService->moveToNextRoom($attemptId, auth()->id());
            return response()->json($result);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function updateTime(int $attemptId, Request $request): JsonResponse
    {
        $validated = $request->validate([
            'time_spent' => 'required|integer|min:0',
        ]);

        try {
            $this->gameService->updateTime($attemptId, $validated['time_spent'], auth()->id());
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function pauseAttempt(int $attemptId): JsonResponse
    {
        try {
            $this->gameService->pauseAttempt($attemptId, auth()->id());
            return response()->json(['message' => 'Game paused']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function resumeAttempt(int $attemptId): JsonResponse
    {
        try {
            $this->gameService->resumeAttempt($attemptId, auth()->id());
            return response()->json(['message' => 'Game resumed']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function abandonAttempt(int $attemptId): JsonResponse
    {
        try {
            $this->gameService->abandonAttempt($attemptId, auth()->id());
            return response()->json(['message' => 'Game abandoned']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function failAttempt(int $attemptId): JsonResponse
    {
        try {
            $this->gameService->failAttempt($attemptId, auth()->id());
            return response()->json(['message' => 'Game failed']);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function getSoundtrack(int $escapeRoomId): JsonResponse
    {
        try {
            $escapeRoom = \App\Models\EscapeRoom::findOrFail($escapeRoomId);

            return response()->json([
                'soundtrack_url' => $escapeRoom->soundtrack_url
            ]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }


}
