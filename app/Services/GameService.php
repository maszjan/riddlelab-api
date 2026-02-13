<?php

namespace App\Services;

use App\Events\AttemptStateUpdated;
use App\Models\Attempt;
use App\Models\AttemptRiddle;
use App\Models\EscapeRoom;
use App\Models\Leaderboard;
use App\Models\Riddle;
use Exception;

class GameService
{
    public function startAttempt(int $escapeRoomId, int $userId): array
    {
        $escapeRoom = EscapeRoom::with([
            'rooms' => function ($query) {
                $query->with([
                    'floorTexture',
                    'doorAsset',
                    'roomAssets.asset',
                    'roomRiddles.riddle.hints',
                ]);
            },
        ])->findOrFail($escapeRoomId);

        $attempt = Attempt::where('user_id', $userId)
            ->where('escape_room_id', $escapeRoomId)
            ->whereIn('status', ['active', 'paused'])
            ->first();

        if (!$attempt) {
            $firstRoom = $escapeRoom->rooms->first();

            $attempt = Attempt::create([
                'user_id' => $userId,
                'escape_room_id' => $escapeRoomId,
                'current_room_id' => $firstRoom?->id,
                'start_time' => now(),
                'completed' => false,
                'time_spent' => 0,
                'hints_used' => 0,
                'collected_items' => [],
                'score' => 0,
                'status' => 'active',
            ]);
        }

        $gameData = $this->prepareGameData($escapeRoom, $attempt);

        broadcast(new AttemptStateUpdated($attempt, 'game_started', $gameData));

        return $gameData;
    }

    public function solveRiddle(int $attemptId, int $riddleId, string $answer, int $userId): array
    {
        $attempt = Attempt::findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $riddle = Riddle::findOrFail($riddleId);

        $attemptRiddle = AttemptRiddle::firstOrCreate(
            [
                'attempt_id' => $attemptId,
                'riddle_id' => $riddle->id,
            ],
            [
                'solved' => false,
                'attempt_number' => 0,
                'max_attempts' => 3,
                'started_at' => now(),
                'hint_used' => false,
            ]
        );

        if ($attemptRiddle->attempt_number >= $attemptRiddle->max_attempts) {
            throw new Exception('Max attempts reached');
        }

        if (strtoupper(trim($answer)) === 'MINIGAME_SUCCESS') {
            if (!$attemptRiddle->solved) {
                $attemptRiddle->solved = true;
                if ($attemptRiddle->started_at) {
                    $attemptRiddle->time_to_solve = now()->diffInSeconds($attemptRiddle->started_at);
                } else {
                    $attemptRiddle->time_to_solve = 0;
                }
                $attemptRiddle->save();

                $points = $riddle->points ?? 100;
                $attempt->score += $points;
                $attempt->save();

                broadcast(new AttemptStateUpdated($attempt, 'riddle_solved', [
                    'riddle_id' => $riddle->id,
                    'points_earned' => $points,
                    'new_score' => $attempt->score,
                ]));
            }

            return [
                'success' => true,
                'message' => 'Mini-game solved!',
                'points_earned' => $riddle->points ?? 100,
                'score' => $attempt->score,
            ];
        }
        if ($attemptRiddle->solved) {
            throw new Exception('Riddle already solved');
        }

        $attemptRiddle->attempt_number++;

        $isCorrect = strtolower(trim($answer)) === strtolower(trim($riddle->answer));

        if ($isCorrect) {
            $attemptRiddle->solved = true;

            if ($attemptRiddle->started_at) {
                $attemptRiddle->time_to_solve = now()->diffInSeconds($attemptRiddle->started_at);
            } else {
                $attemptRiddle->time_to_solve = 0;
            }

            $attemptRiddle->save();

            $points = $riddle->points ?? 100;
            $attempt->score += $points;
            $attempt->save();

            broadcast(new AttemptStateUpdated($attempt, 'riddle_solved', [
                'riddle_id' => $riddle->id,
                'points_earned' => $points,
                'new_score' => $attempt->score,
            ]));

            return [
                'success' => true,
                'message' => 'Correct answer!',
                'points_earned' => $points,
                'score' => $attempt->score,
            ];
        } else {
            $attemptRiddle->save();

            return [
                'success' => false,
                'message' => 'Incorrect answer',
                'attempts_left' => $attemptRiddle->max_attempts - $attemptRiddle->attempt_number,
            ];
        }
    }
    public function useHint(int $attemptId, int $riddleId, int $userId): array
    {
        $attempt = Attempt::findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $attemptRiddle = AttemptRiddle::where('attempt_id', $attemptId)
            ->where('riddle_id', $riddleId)
            ->first();

        if (!$attemptRiddle) {
            $attemptRiddle = AttemptRiddle::create([
                'attempt_id' => $attemptId,
                'riddle_id' => $riddleId,
                'solved' => false,
                'attempt_number' => 0,
                'max_attempts' => 3,
                'started_at' => now(),
                'hint_used' => false,
            ]);
        }

        if ($attemptRiddle->hint_used) {
            throw new Exception('Hint already used for this riddle');
        }

        $riddle = Riddle::with('hints')->findOrFail($riddleId);

        $attemptRiddle->hint_used = true;
        $attemptRiddle->save();

        $attempt->hints_used++;
        $attempt->save();

        $hint = $riddle->hints->first();

        broadcast(new AttemptStateUpdated($attempt, 'hint_used', [
            'riddle_id' => $riddleId,
            'hint' => $hint?->hint_text,
            'hints_used' => $attempt->hints_used,
        ]));

        return [
            'hint' => $hint?->hint_text,
            'hints_used' => $attempt->hints_used,
        ];
    }

    public function moveToNextRoom(int $attemptId, int $userId): array
    {
        $attempt = Attempt::with('escapeRoom.rooms')->findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $currentRoom = $attempt->escapeRoom->rooms->firstWhere('id', $attempt->current_room_id);

        $unsolvedRiddles = AttemptRiddle::where('attempt_id', $attemptId)
            ->whereIn('riddle_id', $currentRoom->roomRiddles->pluck('riddle_id'))
            ->where('solved', false)
            ->count();

        $currentRoom->roomRiddles->count();

        if ($unsolvedRiddles > 0) {
            throw new Exception("You must solve all riddles before proceeding!");
        }

        $rooms = $attempt->escapeRoom->rooms;
        $currentIndex = $rooms->search(fn($room) => $room->id === $attempt->current_room_id);

        if ($currentIndex === false || $currentIndex >= $rooms->count() - 1) {
            return $this->completeAttempt($attempt);
        }

        $nextRoom = $rooms[$currentIndex + 1];
        $attempt->current_room_id = $nextRoom->id;
        $attempt->save();

        broadcast(new AttemptStateUpdated($attempt, 'room_changed', [
            'new_room_id' => $nextRoom->id,
            'room_index' => $currentIndex + 1,
        ]));

        return [
            'message' => 'Moved to next room',
            'current_room_id' => $nextRoom->id,
        ];
    }

    public function updateTime(int $attemptId, int $timeSpent, int $userId): void
    {
        $attempt = Attempt::findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $attempt->time_spent = $timeSpent;
        $attempt->save();
    }

    public function pauseAttempt(int $attemptId, int $userId): void
    {
        $attempt = Attempt::findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $attempt->status = 'paused';
        $attempt->save();

        broadcast(new AttemptStateUpdated($attempt, 'game_paused'));
    }

    public function resumeAttempt(int $attemptId, int $userId): void
    {
        $attempt = Attempt::findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $attempt->status = 'active';
        $attempt->save();

        broadcast(new AttemptStateUpdated($attempt, 'game_resumed'));
    }

    public function abandonAttempt(int $attemptId, int $userId): void
    {
        $attempt = Attempt::findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $attempt->status = 'abandoned';
        $attempt->end_time = now();
        $attempt->save();

        broadcast(new AttemptStateUpdated($attempt, 'game_abandoned'));
    }

    protected function completeAttempt(Attempt $attempt): array
    {
        $attempt->completed = true;
        $attempt->status = 'completed';
        $attempt->end_time = now();
        $attempt->save();

        $this->updateLeaderboard($attempt);

        broadcast(new AttemptStateUpdated($attempt, 'game_completed', [
            'final_score' => $attempt->score,
            'total_time' => $attempt->time_spent,
            'hints_used' => $attempt->hints_used,
        ]));

        return [
            'message' => 'Game completed!',
            'final_score' => $attempt->score,
            'time_spent' => $attempt->time_spent,
        ];
    }

    public function failAttempt(int $attemptId, int $userId): void
    {
        $attempt = Attempt::findOrFail($attemptId);

        if ($attempt->user_id !== $userId) {
            throw new Exception('Unauthorized');
        }

        $attempt->status = 'failed';
        $attempt->end_time = now();
        $attempt->save();

        broadcast(new AttemptStateUpdated($attempt, 'game_failed'));
    }

    protected function updateLeaderboard(Attempt $attempt): void
    {
        $allCompletions = Leaderboard::where('escape_room_id', $attempt->escape_room_id)
            ->orderBy('completion_time')
            ->orderBy('hints_used')
            ->get();

        $position = 1;
        foreach ($allCompletions as $entry) {
            if ($entry->user_id === $attempt->user_id) {
                break;
            }
            if ($entry->completion_time < $attempt->time_spent ||
                ($entry->completion_time === $attempt->time_spent && $entry->hints_used < $attempt->hints_used)) {
                $position++;
            }
        }

        Leaderboard::updateOrCreate(
            [
                'escape_room_id' => $attempt->escape_room_id,
                'user_id' => $attempt->user_id,
            ],
            [
                'completion_time' => $attempt->time_spent,
                'hints_used' => $attempt->hints_used,
                'attempt_count' => Attempt::where('user_id', $attempt->user_id)
                    ->where('escape_room_id', $attempt->escape_room_id)
                    ->where('completed', true)
                    ->count(),
                'position' => $position,
            ]
        );

        $leaderboard = Leaderboard::where('escape_room_id', $attempt->escape_room_id)
            ->orderBy('completion_time')
            ->orderBy('hints_used')
            ->get();

        foreach ($leaderboard as $index => $entry) {
            $entry->position = $index + 1;
            $entry->save();
        }
    }

    public function prepareGameData(EscapeRoom $escapeRoom, Attempt $attempt): array
    {
        $solvedRiddleIds = AttemptRiddle::where('attempt_id', $attempt->id)
            ->where('solved', true)
            ->pluck('riddle_id')
            ->toArray();

        $riddleHintsUsed = AttemptRiddle::where('attempt_id', $attempt->id)
            ->where('hint_used', true)
            ->pluck('riddle_id')
            ->toArray();

        return [
            'attempt' => [
                'id' => $attempt->id,
                'current_room_id' => $attempt->current_room_id,
                'score' => $attempt->score,
                'time_spent' => $attempt->time_spent,
                'hints_used' => $attempt->hints_used,
                'status' => $attempt->status,
            ],
            'escapeRoom' => [
                'id' => $escapeRoom->id,
                'name' => $escapeRoom->name,
                'description' => $escapeRoom->description,
                'thumbnail_url' => $escapeRoom->thumbnail_url,
                'soundtrack_url' => $escapeRoom->soundtrack_url,
            ],
            'rooms' => $escapeRoom->rooms->map(fn($room) => [
                'id' => $room->id,
                'grid_data' => $room->grid_data,
                'walls_data' => $room->walls_data,
                'wall_thickness' => $room->wall_thickness,
                'wall_color' => $room->wall_color,
                'starting_point' => [
                    'row' => $room->starting_point_row,
                    'col' => $room->starting_point_col,
                ],
                'door_position' => $room->door_position,
                'floor_texture_url' => $room->floorTexture?->image_url,
                'door_texture_url' => $room->doorAsset?->image_url,
                'assets' => $room->roomAssets->map(fn($ra) => [
                    'id' => $ra->asset_id,
                    'name' => $ra->asset->name,
                    'image_url' => $ra->asset->image_url,
                    'type' => $ra->asset->type->value,
                    'position' => [
                        'row' => $ra->position_row,
                        'col' => $ra->position_col,
                    ],
                    'rotation' => $ra->rotation,
                ]),
                'riddles' => $room->roomRiddles->map(fn($rr) => [
                    'id' => $rr->riddle_id,
                    'name' => $rr->riddle->name,
                    'question' => $rr->riddle->question,
                    'type' => $rr->riddle->type->value,
                    'points' => $rr->riddle->points,
                    'position' => [
                        'row' => $rr->position_row,
                        'col' => $rr->position_col,
                    ],
                    'max_attempts' => $rr->max_attempts,
                    'solved' => in_array($rr->riddle_id, $solvedRiddleIds),
                    'hint_used' => in_array($rr->riddle_id, $riddleHintsUsed),
                    'hints' => $rr->riddle->hints->map(fn($h) => [
                        'id' => $h->id,
                        'hint_text' => $h->hint_text,
                    ]),
                ]),
            ]),
            'playerConfig' => $attempt->user->player_configuration,
        ];
    }
}
