<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreEscapeRoomRequest;
use App\Http\Requests\Api\UpdateEscapeRoomRequest;
use App\Models\EscapeRoom;
use App\Services\EscapeRoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class EscapeRoomController extends Controller
{
    protected EscapeRoomService $escapeRoomsService;

    public function __construct(EscapeRoomService $escapeRoomsService)
    {
        $this->escapeRoomsService = $escapeRoomsService;
    }

    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 8);

        $escapeRooms = EscapeRoom::with(['user', 'rooms'])
            ->latest()
            ->paginate($perPage);

        return response()->json([
            'data' => $escapeRooms->items(),
            'current_page' => $escapeRooms->currentPage(),
            'last_page' => $escapeRooms->lastPage(),
            'per_page' => $escapeRooms->perPage(),
            'total' => $escapeRooms->total(),
        ]);
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


    public function update(UpdateEscapeRoomRequest $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $escapeRoom = EscapeRoom::where('user_id', Auth::id())->findOrFail($id);

            $updatedEscapeRoom = $this->escapeRoomsService->updateEscapeRoom(
                $escapeRoom,
                $request->validated()
            );

            return response()->json([
                'message' => 'Escape room został pomyślnie zaktualizowany',
                'escape_room' => $this->escapeRoomsService->formatEscapeRoomResponse($updatedEscapeRoom)
            ]);
        });
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

    public function getUserEscapeRooms(Request $request)
    {
        $perPage = $request->input('per_page', 8);

        $escapeRooms = EscapeRoom::where('user_id', Auth::id())
            ->with([
                'rooms.roomAssets.asset',
                'rooms.roomRiddles.riddle.hints',
                'rooms.floorTexture'
            ])
            ->latest()
            ->paginate($perPage);

        $formattedEscapeRooms = $escapeRooms->getCollection()->map(function ($escapeRoom) {
            return $this->escapeRoomsService->formatEscapeRoomResponse($escapeRoom);
        });

        $escapeRooms->setCollection($formattedEscapeRooms);

        return response()->json([
            'data' => $escapeRooms->items(),
            'current_page' => $escapeRooms->currentPage(),
            'last_page' => $escapeRooms->lastPage(),
            'per_page' => $escapeRooms->perPage(),
            'total' => $escapeRooms->total(),
        ]);
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

    public function updateFiles(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'nullable|file|image|max:5120',
            'soundtrack' => 'nullable|file|mimes:mp3,wav,m4a|max:10240',
            'remove_thumbnail' => 'nullable|boolean',
            'remove_soundtrack' => 'nullable|boolean',
        ]);

        $escapeRoom = EscapeRoom::where('user_id', Auth::id())->findOrFail($id);

        $updates = [];

        if ($request->hasFile('thumbnail')) {
            if ($escapeRoom->thumbnail_url) {
                $oldPath = str_replace('/storage/', '', $escapeRoom->thumbnail_url);
                Storage::disk('public')->delete($oldPath);
            }

            $updates['thumbnail_url'] = $this->escapeRoomsService->uploadFile(
                $request->file('thumbnail'),
                'escape-rooms/thumbnails'
            );
        } elseif ($request->input('remove_thumbnail') === '1') {
            if ($escapeRoom->thumbnail_url) {
                $oldPath = str_replace('/storage/', '', $escapeRoom->thumbnail_url);
                Storage::disk('public')->delete($oldPath);
            }
            $updates['thumbnail_url'] = null;
        }

        if ($request->hasFile('soundtrack')) {
            if ($escapeRoom->soundtrack_url) {
                $oldPath = str_replace('/storage/', '', $escapeRoom->soundtrack_url);
                Storage::disk('public')->delete($oldPath);
            }

            $updates['soundtrack_url'] = $this->escapeRoomsService->uploadFile(
                $request->file('soundtrack'),
                'escape-rooms/soundtracks'
            );
        } elseif ($request->input('remove_soundtrack') === '1') {
            if ($escapeRoom->soundtrack_url) {
                $oldPath = str_replace('/storage/', '', $escapeRoom->soundtrack_url);
                Storage::disk('public')->delete($oldPath);
            }
            $updates['soundtrack_url'] = null;
        }

        if (!empty($updates)) {
            $escapeRoom->update($updates);
        }

        return response()->json([
            'message' => 'Pliki zostały zaktualizowane',
            'escape_room' => $this->escapeRoomsService->formatEscapeRoomResponse($escapeRoom)
        ]);
    }
}
