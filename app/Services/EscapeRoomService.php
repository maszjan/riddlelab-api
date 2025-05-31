<?php

namespace App\Services;

use App\Models\EscapeRoom;
use App\Models\Room;
use App\Models\RoomAsset;
use App\Models\RoomRiddle;
use App\Models\Riddle;
use App\Models\Hint;
use App\Enums\AssetType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class EscapeRoomService
{
    public function createEscapeRoom(array $data): EscapeRoom
    {

        $thumbnailPath = null;
        $soundtrackPath = null;

        if (isset($data['thumbnail']) && $data['thumbnail'] instanceof UploadedFile) {
            $thumbnailPath = $this->uploadFile($data['thumbnail'], 'escape-rooms/thumbnails');
        }

        if (isset($data['soundtrack']) && $data['soundtrack'] instanceof UploadedFile) {
            $soundtrackPath = $this->uploadFile($data['soundtrack'], 'escape-rooms/soundtracks');
        }

        $escapeRoom = EscapeRoom::create([
            'user_id' => Auth::id(),
            'name' => $data['name'],
            'description' => $data['description'],
            'thumbnail_url' => $thumbnailPath,
            'soundtrack_url' => $soundtrackPath,
        ]);

        foreach ($data['rooms'] as $roomData) {
            $room = $this->createRoom($escapeRoom, $roomData);

            if (isset($roomData['riddles'])) {
                $this->createRoomRiddles($room, $roomData['riddles']);
            }

            if (isset($roomData['props'])) {
                $this->createRoomProps($room, $roomData['props']);
            }

            if (isset($roomData['door'])) {
                $this->createDoorAsset($room, $roomData['door'], $roomData['doorTextureAssetId'] ?? null);
            }
        }

        return $escapeRoom->load([
            'rooms.roomAssets.asset',
            'rooms.roomRiddles.riddle.hints',
            'rooms.floorTexture'
        ]);
    }

    /**
     * Upload file to storage and return the path
     */
    /**
     * Upload file to storage and return the path
     */
    private function uploadFile(UploadedFile $file, string $directory): string
    {
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($directory, $filename, 'public');

        return '/storage/' . $path;
    }

    public function createRoom(EscapeRoom $escapeRoom, array $roomData): Room
    {
        $doorPosition = null;
        if (isset($roomData['door'])) {
            $doorPosition = [
                'row' => $roomData['door']['row'],
                'col' => $roomData['door']['col'],
                'rotation' => $roomData['door']['rotation'] ?? 0,
            ];
        }

        return Room::create([
            'escape_room_id' => $escapeRoom->id,
            'grid_data' => $roomData['grid'],
            'walls_data' => $roomData['walls'],
            'wall_color' => $roomData['wallColor'],
            'wall_thickness' => $roomData['wallThickness'],
            'floor_texture_id' => $roomData['floorTextureAssetId'] ?? null,
            'starting_point_row' => $roomData['startingPoint']['row'],
            'starting_point_col' => $roomData['startingPoint']['col'],
            'floor_accepted' => $roomData['floorAccepted'] ?? true,
            'door_asset_id' => $roomData['doorTextureAssetId'] ?? null,
            'door_position' => $doorPosition,
        ]);
    }

    public function createRoomRiddles(Room $room, array $riddles): void
    {
        foreach ($riddles as $riddleData) {
            $riddle = Riddle::create([
                'creator_id' => Auth::id(),
                'name' => $riddleData['data']['title'],
                'type' => $riddleData['type'],
                'question' => $riddleData['data']['question'],
                'answer' => $riddleData['data']['answer'],
            ]);

            if (isset($riddleData['data']['hints']) && is_array($riddleData['data']['hints'])) {
                $this->createHintsForRiddle($riddle, $riddleData['data']['hints']);
            }

            RoomRiddle::create([
                'room_id' => $room->id,
                'riddle_id' => $riddle->id,
                'position_row' => $riddleData['position']['row'],
                'position_col' => $riddleData['position']['col'],
            ]);

            if (isset($riddleData['assetId'])) {
                RoomAsset::create([
                    'room_id' => $room->id,
                    'asset_id' => $riddleData['assetId'],
                    'position_row' => $riddleData['position']['row'],
                    'position_col' => $riddleData['position']['col'],
                    'rotation' => 0,
                ]);
            }
        }
    }

    public function createHintsForRiddle(Riddle $riddle, array $hints): void
    {
        foreach ($hints as $hintText) {
            Hint::create([
                'riddle_id' => $riddle->id,
                'hint_text' => $hintText,
            ]);
        }
    }

    public function createRoomProps(Room $room, array $props): void
    {
        foreach ($props as $propData) {
            RoomAsset::create([
                'room_id' => $room->id,
                'asset_id' => $propData['assetId'],
                'position_row' => $propData['position']['row'],
                'position_col' => $propData['position']['col'],
                'rotation' => $propData['rotation'] ?? 0,
            ]);
        }
    }

    public function createDoorAsset(Room $room, array $doorData, ?int $doorAssetId = null): void
    {
        if ($doorAssetId) {
            RoomAsset::create([
                'room_id' => $room->id,
                'asset_id' => $doorAssetId,
                'position_row' => $doorData['row'],
                'position_col' => $doorData['col'],
                'rotation' => $doorData['rotation'] ?? 0,
            ]);
        }
    }

    public function formatEscapeRoomResponse(EscapeRoom $escapeRoom): array
    {
        return [
            'id' => (string) $escapeRoom->id,
            'name' => $escapeRoom->name,
            'description' => $escapeRoom->description,
            'thumbnail_url' => $escapeRoom->thumbnail_url,
            'soundtrack_url' => $escapeRoom->soundtrack_url,
            'is_public' => $escapeRoom->is_public,
            'created_at' => $escapeRoom->created_at,
            'updated_at' => $escapeRoom->updated_at,
            'metadata' => [
                'name' => $escapeRoom->name,
                'description' => $escapeRoom->description,
                'thumbnail' => $escapeRoom->thumbnail_url,
                'soundtrack' => $escapeRoom->soundtrack_url,
            ],
            'rooms' => $escapeRoom->rooms->map(function ($room) {
                return $this->formatRoomResponse($room);
            }),
        ];
    }

    public function formatRoomResponse(Room $room): array
    {
        return [
            'id' => (string) $room->id,
            'escape_room_id' => $room->escape_room_id,
            'escapeRoomId' => (string) $room->escape_room_id,
            'grid' => $room->grid_data,
            'grid_data' => $room->grid_data,
            'walls' => array_merge($room->walls_data, ['wallColor' => $room->wall_color]),
            'walls_data' => $room->walls_data,
            'wallColor' => $room->wall_color,
            'wall_color' => $room->wall_color,
            'wallThickness' => $room->wall_thickness,
            'wall_thickness' => $room->wall_thickness,
            'floorTexture' => $room->floorTexture?->image_url,
            'floor_texture_id' => $room->floor_texture_id,
            'floorTextureAssetId' => $room->floor_texture_id,
            'starting_point_row' => $room->starting_point_row,
            'starting_point_col' => $room->starting_point_col,
            'floor_accepted' => $room->floor_accepted,
            'created_at' => $room->created_at,
            'updated_at' => $room->updated_at,
            'startingPoint' => [
                'row' => $room->starting_point_row,
                'col' => $room->starting_point_col,
            ],
            'riddles' => $this->formatRiddlesResponse($room),
            'props' => $this->formatPropsResponse($room),
            'door' => $this->getDoorData($room),
            'doorTextureAssetId' => $room->door_asset_id,
        ];
    }

    public function formatRiddlesResponse(Room $room): array
    {
        if (!$room->roomRiddles) {
            return [];
        }

        return $room->roomRiddles->map(function ($roomRiddle) use ($room) {
            // Find the asset for this riddle at the same position
            $riddleAsset = $room->roomAssets
                ->where('position_row', $roomRiddle->position_row)
                ->where('position_col', $roomRiddle->position_col)
                ->first();

            return [
                'id' => 'riddle-' . $roomRiddle->riddle->id,
                'position' => [
                    'row' => $roomRiddle->position_row,
                    'col' => $roomRiddle->position_col,
                ],
                'type' => $roomRiddle->riddle->type->value,
                'data' => [
                    'title' => $roomRiddle->riddle->name,
                    'question' => $roomRiddle->riddle->question,
                    'answer' => $roomRiddle->riddle->answer,
                    'hints' => $roomRiddle->riddle->hints ? $roomRiddle->riddle->hints->pluck('hint_text')->toArray() : [],
                    'options' => [],
                ],
                'assetId' => $riddleAsset?->asset_id,
                'texture' => $riddleAsset?->asset?->image_url,
            ];
        })->toArray();
    }

    public function formatPropsResponse(Room $room): array
    {
        if (!$room->roomAssets) {
            return [];
        }

        return $room->roomAssets
            ->filter(function ($roomAsset) {
                return $roomAsset->asset && $roomAsset->asset->type === AssetType::Prop;
            })
            ->map(function ($roomAsset) {
                return [
                    'id' => 'prop-' . Str::uuid(),
                    'name' => $roomAsset->asset->name,
                    'imageUrl' => $roomAsset->asset->image_url,
                    'assetId' => $roomAsset->asset_id,
                    'position' => [
                        'row' => $roomAsset->position_row,
                        'col' => $roomAsset->position_col,
                    ],
                    'rotation' => $roomAsset->rotation,
                    'hasCollider' => $roomAsset->asset->has_collider,
                ];
            })->values()->toArray();
    }

    public function getDoorData(Room $room): ?array
    {
        // First check if door data is stored in the room model
        if ($room->door_position) {
            return $room->door_position;
        }

        // Fallback to checking room assets for door type
        if (!$room->roomAssets) {
            return null;
        }

        $doorAsset = $room->roomAssets
            ->filter(function ($roomAsset) {
                return $roomAsset->asset && $roomAsset->asset->type === AssetType::Door;
            })
            ->first();

        if ($doorAsset) {
            return [
                'row' => $doorAsset->position_row,
                'col' => $doorAsset->position_col,
                'rotation' => $doorAsset->rotation,
            ];
        }

        return null;
    }}
