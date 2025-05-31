<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreEscapeRoomRequest;
use App\Models\EscapeRoom;
use App\Services\EscapeRoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EscapeRoomController extends Controller
{
    protected EscapeRoomService $escapeRoomsService;

    public function __construct(EscapeRoomService $escapeRoomsService)
    {
        $this->escapeRoomsService = $escapeRoomsService;
    }

    public function index()
    {
        $escapeRooms = EscapeRoom::with(['user', 'rooms'])
            ->latest()
            ->paginate(10);

        return response()->json($escapeRooms);
    }

    public function show($id)
    {
        $escapeRoom = EscapeRoom::with([
            'user',
            'rooms.roomAssets.asset',
            'rooms.roomRiddles.riddle.hints',
            'rooms.floorTexture'
        ])->findOrFail($id);

        return response()->json($this->escapeRoomsService->formatEscapeRoomResponse($escapeRoom));
    }

    public function store(StoreEscapeRoomRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $escapeRoom = $this->escapeRoomsService->createEscapeRoom($request->validated());

            return response()->json([
                'message' => 'Escape room został pomyślnie utworzony',
                'escape_room' => $this->escapeRoomsService->formatEscapeRoomResponse($escapeRoom)
            ], 201);
        });
    }

    public function update(Request $request, $id)
    {
        $escapeRoom = EscapeRoom::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'thumbnail_url' => 'nullable|string',
            'soundtrack_url' => 'nullable|string',
        ]);

        $escapeRoom->update($request->only([
            'name', 'description', 'thumbnail_url', 'soundtrack_url'
        ]));

        return response()->json([
            'message' => 'Escape room został pomyślnie zaktualizowany',
            'escape_room' => $escapeRoom
        ]);
    }

    public function destroy($id)
    {
        $escapeRoom = EscapeRoom::where('user_id', Auth::id())->findOrFail($id);

        DB::transaction(function () use ($escapeRoom) {

            foreach ($escapeRoom->rooms as $room) {
                $room->roomAssets()->delete();
            }

            foreach ($escapeRoom->rooms as $room) {
                foreach ($room->roomRiddles as $roomRiddle) {
                    $roomRiddle->riddle->hints()->delete();

                    $roomRiddle->delete();

                    $roomRiddle->riddle->delete();
                }
            }

            $escapeRoom->attempts()->delete();
            if (method_exists($escapeRoom, 'leaderboard')) {
                $escapeRoom->leaderboard()->delete();
            }

            $escapeRoom->rooms()->delete();

            $escapeRoom->delete();
        });

        return response()->json(['message' => 'Escape room został pomyślnie usunięty']);
    }

    public function getUserEscapeRooms()
    {
        $escapeRooms = EscapeRoom::where('user_id', Auth::id())
            ->with([
                'rooms.roomAssets.asset',
                'rooms.roomRiddles.riddle.hints',
                'rooms.floorTexture'
            ])
            ->latest()
            ->get();

        // Format each escape room using the service
        $formattedEscapeRooms = $escapeRooms->map(function ($escapeRoom) {
            return $this->escapeRoomsService->formatEscapeRoomResponse($escapeRoom);
        });

        return response()->json($formattedEscapeRooms);
    }

    public function getLeaderboard($id)
    {
        $escapeRoom = EscapeRoom::findOrFail($id);

        $leaderboard = $escapeRoom->leaderboard()
            ->with('user')
            ->orderBy('position')
            ->limit(10)
            ->get();

        return response()->json($leaderboard);
    }
}
