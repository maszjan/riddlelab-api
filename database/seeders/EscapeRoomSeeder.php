<?php


namespace Database\Seeders;

use App\Models\EscapeRoom;
use App\Models\Room;
use App\Models\User;
use App\Models\Asset;
use App\Models\Riddle;
use App\Models\RoomAsset;
use App\Models\RoomRiddle;
use App\Enums\AssetType;
use Illuminate\Database\Seeder;

class EscapeRoomSeeder extends Seeder
{
    private const ROOM_WIDTH = 30;
    private const ROOM_HEIGHT = 20;

    public function run(): void
    {
        $users = User::all();
        $assets = Asset::all();
        $riddles = Riddle::all();

        foreach ($users as $user) {
            $escapeRooms = EscapeRoom::factory(rand(2, 3))->create([
                'user_id' => $user->id,
                'is_public' => rand(1, 100) <= 80,
            ]);

            foreach ($escapeRooms as $escapeRoom) {
                $wallColor = collect(['#888888', '#654321', '#444444', '#666666'])->random();
                $roomData = $this->generateRoomLayout($wallColor);
                
                // Get door and starting point from the room data
                $doors = $assets->where('type', AssetType::Door);
                $doorInfo = $this->selectDoorAndStartingPoint($roomData['open_cells'], $doors);

                $room = Room::create([
                    'escape_room_id' => $escapeRoom->id,
                    'grid_data' => $roomData['grid_data'],
                    'walls_data' => $roomData['walls_data'],
                    'wall_color' => $wallColor,
                    'wall_thickness' => rand(15, 25),
                    'floor_texture_id' => rand(6, 10),
                    'starting_point_row' => $doorInfo['starting_point']['row'],
                    'starting_point_col' => $doorInfo['starting_point']['col'],
                    'floor_accepted' => true,
                    'door_asset_id' => $doorInfo['door_asset_id'],
                    'door_position' => $doorInfo['door_position'],
                ]);

                $this->populateRoom($room, $assets, $riddles, $roomData['open_cells'], $doorInfo);
            }
        }

        $this->createPublicPreviewMaps($users, $assets, $riddles);
        $this->createTestRoom($users->first(), $assets, $riddles);
    }

    private function selectDoorAndStartingPoint($openCells, $doors)
    {
        $doorInfo = [
            'door_asset_id' => null,
            'door_position' => null,
            'starting_point' => ['row' => 0, 'col' => 0],
            'door_cell' => null
        ];

        if (!empty($openCells)) {
            // Select a random starting point from open cells
            $startingCell = $openCells[array_rand($openCells)];
            $doorInfo['starting_point'] = [
                'row' => $startingCell[0],
                'col' => $startingCell[1]
            ];

            // If doors exist, place one and set door info
            if ($doors->isNotEmpty()) {
                // Select a different cell for the door (not the starting point)
                $availableCells = array_filter($openCells, function($cell) use ($startingCell) {
                    return !($cell[0] == $startingCell[0] && $cell[1] == $startingCell[1]);
                });

                if (!empty($availableCells)) {
                    $doorCell = $availableCells[array_rand($availableCells)];
                    $doorInfo['door_asset_id'] = $doors->first()->id;
                    $doorInfo['door_position'] = [
                        'row' => $doorCell[0],
                        'col' => $doorCell[1]
                    ];
                    $doorInfo['door_cell'] = $doorCell;
                }
            }
        }

        return $doorInfo;
    }

    private function generateRoomLayout(string $wallColor): array
    {
        $gridData = [];
        $wallsData = ['wallColor' => $wallColor];
        $openCells = [];

        // Create a big FILLED room (solid block of walls)
        $startRow = 2;
        $endRow = 18;
        $startCol = 2;
        $endCol = 28;

        // Fill the ENTIRE area with walls (solid block)
        for ($row = $startRow; $row <= $endRow; $row++) {
            for ($col = $startCol; $col <= $endCol; $col++) {
                $key = "{$row}-{$col}";
                $gridData[$key] = "1";
                $wallsData[$key] = $wallColor;
                
                // All cells are considered "open" for placing assets/riddles on top
                $openCells[] = [$row, $col];
            }
        }

        return [
            'grid_data' => $gridData,
            'walls_data' => $wallsData,
            'open_cells' => array_values($openCells)
        ];
    }

    private function generateComplexRoomLayout(string $wallColor): array
    {
        $gridData = [];
        $wallsData = ['wallColor' => $wallColor];
        $openCells = [];

        // Create a large FILLED room (solid block of walls)
        $startRow = 3;
        $endRow = 17;
        $startCol = 3;
        $endCol = 27;

        // Fill the ENTIRE area with walls (solid block)
        for ($row = $startRow; $row <= $endRow; $row++) {
            for ($col = $startCol; $col <= $endCol; $col++) {
                $key = "{$row}-{$col}";
                $gridData[$key] = "1";
                $wallsData[$key] = $wallColor;
                
                // All cells are considered "open" for placing assets/riddles on top
                $openCells[] = [$row, $col];
            }
        }

        return [
            'grid_data' => $gridData,
            'walls_data' => $wallsData,
            'open_cells' => array_values($openCells)
        ];
    }

    private function createPublicPreviewMaps($users, $assets, $riddles): void
    {
        $previewMaps = [
            [
                'name' => 'Tajemnica Starożytnej Świątyni',
                'description' => 'Odkryj sekrety starożytnej świątyni pełnej tajemniczych zagadek i ukrytych skarbów.',
                'thumbnail' => 'rl-app-2.png',
                'wallColor' => '#390909',
            ],
            [
                'name' => 'Nawiedzony Dwór',
                'description' => 'Przemierz upiorny dwór, gdzie każdy pokój kryje mroczną tajemnicę czekającą na odkrycie.',
                'thumbnail' => 'rl-app-3.png',
                'wallColor' => '#1e1515',
            ],
            [
                'name' => 'Ucieczka ze Stacji Kosmicznej',
                'description' => 'Awaria na stacji kosmicznej! Rozwiąż techniczne zagadki, aby przywrócić zasilanie i bezpiecznie uciec.',
                'thumbnail' => 'rl-app-4.png',
                'wallColor' => '#444444',
            ],
        ];

        $soundtracks = [
            '2c23a7e1-23c1-41ca-9101-278214e259f0.mp3',
            '3e43d40a-dbed-45a8-8265-f65bbe1944f0.mp3',
            'a7e4d623-fcef-4666-a4b9-f8925515e479.mp3',
        ];

        foreach ($previewMaps as $mapData) {
            $escapeRoom = EscapeRoom::create([
                'name' => $mapData['name'],
                'description' => $mapData['description'],
                'thumbnail_url' => '/storage/escape-rooms/thumbnails/' . $mapData['thumbnail'],
                'soundtrack_url' => '/storage/escape-rooms/soundtracks/' . $soundtracks[array_rand($soundtracks)],
                'user_id' => $users->random()->id,
                'is_public' => true,
            ]);

            $roomData = $this->generateComplexRoomLayout($mapData['wallColor']);
            $doors = $assets->where('type', AssetType::Door);
            $doorInfo = $this->selectDoorAndStartingPoint($roomData['open_cells'], $doors);

            $room = Room::create([
                'escape_room_id' => $escapeRoom->id,
                'grid_data' => $roomData['grid_data'],
                'walls_data' => $roomData['walls_data'],
                'wall_color' => $mapData['wallColor'],
                'wall_thickness' => 17,
                'floor_texture_id' => 9,
                'starting_point_row' => $doorInfo['starting_point']['row'],
                'starting_point_col' => $doorInfo['starting_point']['col'],
                'floor_accepted' => true,
                'door_asset_id' => $doorInfo['door_asset_id'],
                'door_position' => $doorInfo['door_position'],
            ]);

            $this->populateRoom($room, $assets, $riddles, $roomData['open_cells'], $doorInfo);
        }
    }

private function populateRoom($room, $assets, $riddles, $openCells, $doorInfo): void
{
    $usedPositions = [];

    // Add starting point to used positions
    $startingPosition = "{$doorInfo['starting_point']['row']},{$doorInfo['starting_point']['col']}";
    $usedPositions[] = $startingPosition;

    // Get different asset types
    $props = $assets->where('type', AssetType::Prop);
    $riddleAssets = $assets->where('type', AssetType::Riddle); // ADD THIS LINE

    // 1. Add the door if it was selected
    if ($doorInfo['door_asset_id'] && $doorInfo['door_cell']) {
        $row = $doorInfo['door_cell'][0];
        $col = $doorInfo['door_cell'][1];
        $position = "{$row},{$col}";
        $usedPositions[] = $position;

        RoomAsset::create([
            'room_id' => $room->id,
            'asset_id' => $doorInfo['door_asset_id'],
            'position_row' => $row,
            'position_col' => $col,
            'rotation' => collect([0, 90, 180, 270])->random(),
        ]);
    }

    // 2. Add props (adjusted for available props)
    if ($props->isNotEmpty() && !empty($openCells)) {
        $availableCells = array_filter($openCells, function($cell) use ($usedPositions) {
            $position = "{$cell[0]},{$cell[1]}";
            return !in_array($position, $usedPositions);
        });

        if (!empty($availableCells)) {
            // Calculate realistic prop count based on available props
            $availablePropsCount = $props->count();
            $maxProps = min($availablePropsCount, 15, count($availableCells));
            
            // If we have very few props, use them multiple times
            if ($availablePropsCount < 8) {
                $propCount = min($maxProps, count($availableCells));
            } else {
                $propCount = rand(min(8, $availablePropsCount), $maxProps);
            }

            // Select props (with repetition if needed)
            $selectedProps = collect();
            for ($i = 0; $i < $propCount; $i++) {
                $selectedProps->push($props->random());
            }

            foreach ($selectedProps as $prop) {
                $availableCells = array_filter($openCells, function($cell) use ($usedPositions) {
                    $position = "{$cell[0]},{$cell[1]}";
                    return !in_array($position, $usedPositions);
                });

                if (!empty($availableCells)) {
                    $cell = $availableCells[array_rand($availableCells)];
                    $row = $cell[0];
                    $col = $cell[1];
                    $position = "{$row},{$col}";

                    $usedPositions[] = $position;

                    RoomAsset::create([
                        'room_id' => $room->id,
                        'asset_id' => $prop->id,
                        'position_row' => $row,
                        'position_col' => $col,
                        'rotation' => collect([0, 90, 180, 270])->random(),
                    ]);
                }
            }
        }
    }

    // 3. Add MAX 3 riddles (well distributed across the room)
    if ($riddles->isNotEmpty() && !empty($openCells)) {
        $availableCells = array_filter($openCells, function($cell) use ($usedPositions) {
            $position = "{$cell[0]},{$cell[1]}";
            return !in_array($position, $usedPositions);
        });

        if (!empty($availableCells)) {
            $availableRiddlesCount = $riddles->count();
            $maxRiddles = min($availableRiddlesCount, 3, count($availableCells));
            $riddleCount = rand(1, $maxRiddles);
            
            // Select riddles (avoid error if not enough riddles)
            if ($riddleCount > $availableRiddlesCount) {
                $riddleCount = $availableRiddlesCount;
            }
            
            $selectedRiddles = $riddles->random($riddleCount);

            foreach ($selectedRiddles as $riddle) {
                $availableCells = array_filter($openCells, function($cell) use ($usedPositions) {
                    $position = "{$cell[0]},{$cell[1]}";
                    return !in_array($position, $usedPositions);
                });

                if (!empty($availableCells)) {
                    $cell = $availableCells[array_rand($availableCells)];
                    $row = $cell[0];
                    $col = $cell[1];
                    $position = "{$row},{$col}";

                    $usedPositions[] = $position;

                    // Create the RoomRiddle record
                    RoomRiddle::create([
                        'room_id' => $room->id,
                        'riddle_id' => $riddle->id,
                        'position_row' => $row,
                        'position_col' => $col,
                    ]);

                    // Create a RoomAsset record at the same position using riddle-specific assets
                    if ($riddleAssets->isNotEmpty()) {
                        $selectedRiddleAsset = $riddleAssets->random();
                        
                        RoomAsset::create([
                            'room_id' => $room->id,
                            'asset_id' => $selectedRiddleAsset->id,
                            'position_row' => $row,
                            'position_col' => $col,
                            'rotation' => 0,
                        ]);
                    }
                }
            }
        }
    }
}


private function createTestRoom($user, $assets, $riddles): void
{
    $testEscapeRoom = EscapeRoom::create([
        'name' => 'test1',
        'description' => 'test1testet',
        'thumbnail_url' => '/storage/escape-rooms/thumbnails/rl-app-2.png',
        'soundtrack_url' => '/storage/escape-rooms/soundtracks/2c23a7e1-23c1-41ca-9101-278214e259f0.mp3',
        'is_public' => false,
        'user_id' => $user->id,
    ]);

    $roomData = $this->generateRoomLayout('#888888');
    $doors = $assets->where('type', AssetType::Door);
    $doorInfo = $this->selectDoorAndStartingPoint($roomData['open_cells'], $doors);

    $testRoom = Room::create([
        'escape_room_id' => $testEscapeRoom->id,
        'grid_data' => $roomData['grid_data'],
        'walls_data' => $roomData['walls_data'],
        'wall_color' => '#888888',
        'wall_thickness' => 20,
        'floor_texture_id' => 8,
        'starting_point_row' => $doorInfo['starting_point']['row'],
        'starting_point_col' => $doorInfo['starting_point']['col'],
        'floor_accepted' => true,
        'door_asset_id' => $doorInfo['door_asset_id'],
        'door_position' => $doorInfo['door_position'],
    ]);

    $props = $assets->where('type', AssetType::Prop);
    $riddleAssets = $assets->where('type', AssetType::Riddle);

    // Add door if available
    if ($doorInfo['door_asset_id'] && $doorInfo['door_cell']) {
        RoomAsset::create([
            'room_id' => $testRoom->id,
            'asset_id' => $doorInfo['door_asset_id'],
            'position_row' => $doorInfo['door_cell'][0],
            'position_col' => $doorInfo['door_cell'][1],
            'rotation' => 0,
        ]);
    }

    // Add some props with more space
    if ($props->isNotEmpty()) {
        $availableCells = array_filter($roomData['open_cells'], function($cell) use ($doorInfo) {
            $startPos = "{$doorInfo['starting_point']['row']},{$doorInfo['starting_point']['col']}";
            $doorPos = $doorInfo['door_cell'] ? "{$doorInfo['door_cell'][0]},{$doorInfo['door_cell'][1]}" : null;
            $cellPos = "{$cell[0]},{$cell[1]}";
            return $cellPos !== $startPos && $cellPos !== $doorPos;
        });

        // Add multiple props to fill the space (fixed logic)
        $availablePropsCount = $props->count();
        $propCount = min(5, $availablePropsCount, count($availableCells));
        
        $usedTestPositions = [];

        for ($i = 0; $i < $propCount; $i++) {
            $prop = $props->random(); // Get random prop (can repeat)
            
            $availableCells = array_filter($roomData['open_cells'], function($cell) use ($doorInfo, $usedTestPositions) {
                $startPos = "{$doorInfo['starting_point']['row']},{$doorInfo['starting_point']['col']}";
                $doorPos = $doorInfo['door_cell'] ? "{$doorInfo['door_cell'][0]},{$doorInfo['door_cell'][1]}" : null;
                $cellPos = "{$cell[0]},{$cell[1]}";
                return $cellPos !== $startPos && $cellPos !== $doorPos && !in_array($cellPos, $usedTestPositions);
            });

            if (!empty($availableCells)) {
                $cell = $availableCells[array_rand($availableCells)];
                $usedTestPositions[] = "{$cell[0]},{$cell[1]}";
                
                RoomAsset::create([
                    'room_id' => $testRoom->id,
                    'asset_id' => $prop->id,
                    'position_row' => $cell[0],
                    'position_col' => $cell[1],
                    'rotation' => collect([0, 90, 180, 270])->random(),
                ]);
            }
        }
    }

    // Add riddles with riddle-specific assets
    if ($riddles->isNotEmpty()) {
        $availableCells = array_filter($roomData['open_cells'], function($cell) use ($doorInfo) {
            $startPos = "{$doorInfo['starting_point']['row']},{$doorInfo['starting_point']['col']}";
            $doorPos = $doorInfo['door_cell'] ? "{$doorInfo['door_cell'][0]},{$doorInfo['door_cell'][1]}" : null;
            $cellPos = "{$cell[0]},{$cell[1]}";
            return $cellPos !== $startPos && $cellPos !== $doorPos;
        });

        // Add 2-3 riddles (safe logic)
        $availableRiddlesCount = $riddles->count();
        $riddleCount = min(3, $availableRiddlesCount, count($availableCells));
        $usedRiddlePositions = [];

        for ($i = 0; $i < $riddleCount; $i++) {
            $riddle = $riddles->random(); // Get random riddle (can repeat)
            
            $availableCells = array_filter($roomData['open_cells'], function($cell) use ($doorInfo, $usedRiddlePositions) {
                $startPos = "{$doorInfo['starting_point']['row']},{$doorInfo['starting_point']['col']}";
                $doorPos = $doorInfo['door_cell'] ? "{$doorInfo['door_cell'][0]},{$doorInfo['door_cell'][1]}" : null;
                $cellPos = "{$cell[0]},{$cell[1]}";
                return $cellPos !== $startPos && $cellPos !== $doorPos && !in_array($cellPos, $usedRiddlePositions);
            });

            if (!empty($availableCells)) {
                $cell = $availableCells[array_rand($availableCells)];
                $usedRiddlePositions[] = "{$cell[0]},{$cell[1]}";
                
                // Create the RoomRiddle record
                RoomRiddle::create([
                    'room_id' => $testRoom->id,
                    'riddle_id' => $riddle->id,
                    'position_row' => $cell[0],
                    'position_col' => $cell[1],
                ]);

                // Create a RoomAsset record at the same position using riddle-specific assets
                if ($riddleAssets->isNotEmpty()) {
                    $selectedRiddleAsset = $riddleAssets->random();
                    
                    RoomAsset::create([
                        'room_id' => $testRoom->id,
                        'asset_id' => $selectedRiddleAsset->id,
                        'position_row' => $cell[0],
                        'position_col' => $cell[1],
                        'rotation' => 0,
                    ]);
                }
            }
        }
    }
}
}
