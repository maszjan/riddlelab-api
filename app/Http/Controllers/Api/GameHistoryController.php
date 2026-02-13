<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameHistoryController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $attempts = Attempt::with([
            'escapeRoom:id,name,description,thumbnail_url',
            'attemptRiddles.riddle:id,question',
        ])
            ->where('user_id', $user->id)
            ->orderByDesc('created_at')
            ->paginate(10);

        $data = $attempts->map(function ($attempt) {
            $room = $attempt->escapeRoom;

            return [
                'attempt_id' => $attempt->id,
                'escape_room' => [
                    'id' => $room->id,
                    'name' => $room->name ?? null,
                    'description' => $room->description ?? null,
                    'thumbnail_url' => $room->thumbnail_url ?? null,
                ],
                'start_time' => $attempt->start_time,
                'end_time' => $attempt->end_time,
                'completed' => (bool) $attempt->completed,
                'time_spent' => $attempt->time_spent,
                'hints_used' => $attempt->hints_used,
                'score' => $attempt->score,
                'status' => $attempt->status,
                'riddles' => $attempt->attemptRiddles->map(function ($ar) {
                    return [
                        'riddle_id' => $ar->riddle_id,
                        'question' => $ar->riddle->question ?? null,
                        'solved' => (bool) $ar->solved,
                        'time_to_solve' => $ar->time_to_solve,
                        'attempt_number' => $ar->attempt_number,
                        'max_attempts' => $ar->max_attempts,
                    ];
                })->values(),
            ];
        });

        return response()->json([
            'data' => $data->values(),
            'current_page' => $attempts->currentPage(),
            'last_page' => $attempts->lastPage(),
            'total' => $attempts->total(),
        ]);
    }
}
