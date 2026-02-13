<?php

use App\Models\User;
use App\Models\EscapeRoom;
use App\Models\Room;
use App\Models\Asset;
use App\Models\Riddle;
use App\Models\RoomAsset;
use App\Models\RoomRiddle;
use App\Enums\RiddleType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

test('anyone can get list of escape rooms', function () {
    EscapeRoom::factory()->count(5)->create();

    $response = $this->getJson('/api/v1/escape-room');

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'data',
        'current_page',
        'last_page',
        'per_page',
        'total',
    ]);

    expect($response->json('total'))->toBe(5);
});

test('escape rooms list can be paginated', function () {
    EscapeRoom::factory()->count(15)->create();

    $response = $this->getJson('/api/v1/escape-room?per_page=5');

    $response->assertStatus(200);
    expect($response->json('per_page'))->toBe(5);
    expect($response->json('total'))->toBe(15);
    expect(count($response->json('data')))->toBe(5);
});

test('escape rooms list shows latest first', function () {
    $old = EscapeRoom::factory()->create(['created_at' => now()->subDays(5)]);
    $new = EscapeRoom::factory()->create(['created_at' => now()]);

    $response = $this->getJson('/api/v1/escape-room');

    $response->assertStatus(200);
    expect($response->json('data.0.id'))->toBe($new->id);
});

test('anyone can view a single escape room', function () {
    $escapeRoom = EscapeRoom::factory()->create();
    Room::factory()->create(['escape_room_id' => $escapeRoom->id]);

    $response = $this->getJson("/api/v1/escape-room/{$escapeRoom->id}");

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'id',
        'name',
        'description',
        'thumbnail_url',
        'soundtrack_url',
        'is_public',
        'rooms',
    ]);

    expect($response->json('id'))->toBe((string) $escapeRoom->id);
});

test('show returns 404 for non-existent escape room', function () {
    $response = $this->getJson('/api/v1/escape-room/99999');

    $response->assertStatus(404);
});

test('show includes rooms with assets and riddles', function () {
    $escapeRoom = EscapeRoom::factory()->create();
    $room = Room::factory()->create(['escape_room_id' => $escapeRoom->id]);

    $asset = Asset::factory()->prop()->create();
    RoomAsset::factory()->create([
        'room_id' => $room->id,
        'asset_id' => $asset->id,
    ]);

    $riddle = Riddle::factory()->create();
    RoomRiddle::factory()->create([
        'room_id' => $room->id,
        'riddle_id' => $riddle->id,
    ]);

    $response = $this->getJson("/api/v1/escape-room/{$escapeRoom->id}");

    $response->assertStatus(200);
    expect($response->json('rooms'))->toBeArray();
    expect(count($response->json('rooms.0.props')))->toBeGreaterThan(0);
    expect(count($response->json('rooms.0.riddles')))->toBeGreaterThan(0);
});


test('authenticated user can create escape room', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $floorAsset = Asset::factory()->create();
    $doorAsset = Asset::factory()->door()->create();

    $thumbnail = UploadedFile::fake()->image('thumbnail.png');
    $soundtrack = UploadedFile::fake()->create('soundtrack.mp3', 1000, 'audio/mpeg');

    $response = $this->actingAs($user)->postJson('/api/v1/escape-room', [
        'name' => 'Test Escape Room',
        'description' => 'Test description',
        'thumbnail' => $thumbnail,
        'soundtrack' => $soundtrack,
        'rooms' => [
            [
                'grid' => ['1-1' => '1', '1-2' => '1'],
                'walls' => ['wallColor' => '#888888'],
                'wallColor' => '#888888',
                'wallThickness' => 20,
                'floorTexture' => '/storage/floor.png',
                'floorTextureAssetId' => $floorAsset->id,
                'doorTexture' => '/storage/door.png',
                'doorTextureAssetId' => $doorAsset->id,
                'startingPoint' => ['row' => 1, 'col' => 1],
                'door' => ['row' => 5, 'col' => 5, 'rotation' => 0],
                'floorAccepted' => true,
                'riddles' => [],
                'props' => [],
            ]
        ]
    ]);

    $response->assertStatus(201);
    $response->assertJsonStructure([
        'message',
        'escape_room' => ['id', 'name', 'description', 'rooms']
    ]);

    $this->assertDatabaseHas('escape_rooms', [
        'name' => 'Test Escape Room',
        'user_id' => $user->id,
    ]);
});

test('create escape room requires authentication', function () {
    $response = $this->postJson('/api/v1/escape-room', [
        'name' => 'Test Room',
        'description' => 'Description',
    ]);

    $response->assertStatus(401);
});

test('create escape room validates required fields', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/escape-room', []);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'description', 'rooms']);
});

test('create escape room with riddles', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $floorAsset = Asset::factory()->create();
    $doorAsset = Asset::factory()->door()->create();
    $riddleAsset = Asset::factory()->riddle()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/escape-room', [
        'name' => 'Room with Riddles',
        'description' => 'Has riddles',
        'rooms' => [
            [
                'grid' => ['1-1' => '1'],
                'walls' => ['wallColor' => '#888888'],
                'wallColor' => '#888888',
                'wallThickness' => 20,
                'floorTexture' => '/storage/floor.png',
                'floorTextureAssetId' => $floorAsset->id,
                'doorTexture' => '/storage/door.png',
                'doorTextureAssetId' => $doorAsset->id,
                'startingPoint' => ['row' => 1, 'col' => 1],
                'door' => ['row' => 5, 'col' => 5, 'rotation' => 0],
                'floorAccepted' => true,
                'riddles' => [
                    [
                        'type' => RiddleType::Knowledge->value,
                        'position' => ['row' => 2, 'col' => 2],
                        'assetId' => $riddleAsset->id,
                        'data' => [
                            'title' => 'Test Riddle',
                            'question' => 'What is 2+2?',
                            'answer' => '4',
                            'hints' => ['Think about addition', 'It\'s less than 5'],
                        ]
                    ]
                ],
                'props' => [],
            ]
        ]
    ]);

    $response->assertStatus(201);

    $this->assertDatabaseHas('riddles', [
        'name' => 'Test Riddle',
        'question' => 'What is 2+2?',
        'answer' => '4',
    ]);
});

test('owner can update their escape room', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $user->id]);
    $room = Room::factory()->create(['escape_room_id' => $escapeRoom->id]);

    $floorAsset = Asset::factory()->floor()->create();
    $doorAsset = Asset::factory()->door()->create();

    $response = $this->actingAs($user)->putJson("/api/v1/escape-room/{$escapeRoom->id}", [
        'name' => 'Updated Name',
        'description' => 'Updated description',
        'rooms' => [
            [
                'grid' => $room->grid_data,
                'walls' => $room->walls_data,
                'wallColor' => $room->wall_color,
                'wallThickness' => $room->wall_thickness,
                'floorTexture' => '/storage/floor.png',
                'floorTextureAssetId' => $floorAsset->id,
                'doorTexture' => '/storage/door.png',
                'doorTextureAssetId' => $doorAsset->id,
                'startingPoint' => [
                    'row' => $room->starting_point_row,
                    'col' => $room->starting_point_col,
                ],
                'door' => ['row' => 10, 'col' => 10, 'rotation' => 0],
                'floorAccepted' => true,
                'riddles' => [],
                'props' => [],
            ]
        ]
    ]);

    $response->assertStatus(200);
    $response->assertJson([
        'message' => 'Escape room został pomyślnie zaktualizowany'
    ]);

    $this->assertDatabaseHas('escape_rooms', [
        'id' => $escapeRoom->id,
        'name' => 'Updated Name',
    ]);
});
test('user cannot update escape room they do not own', function () {
    $owner = User::factory()->create();
    $otherUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $owner->id]);

    $floorAsset = Asset::factory()->create();
    $doorAsset = Asset::factory()->door()->create();

    $response = $this->actingAs($otherUser)->putJson("/api/v1/escape-room/{$escapeRoom->id}", [
        'name' => 'Hacked Name',
        'description' => 'Hacked description',
        'rooms' => [
            [
                'grid' => ['1-1' => '1'],
                'walls' => ['wallColor' => '#888888'],
                'wallColor' => '#888888',
                'wallThickness' => 20,
                'floorTexture' => '/storage/floor.png',
                'floorTextureAssetId' => $floorAsset->id,
                'doorTexture' => '/storage/door.png',
                'doorTextureAssetId' => $doorAsset->id,
                'startingPoint' => ['row' => 1, 'col' => 1],
                'door' => ['row' => 5, 'col' => 5, 'rotation' => 0],
                'floorAccepted' => true,
                'riddles' => [],
                'props' => [],
            ]
        ]
    ]);

    $response->assertStatus(404);
});

test('update requires authentication', function () {
    $escapeRoom = EscapeRoom::factory()->create();

    $response = $this->putJson("/api/v1/escape-room/{$escapeRoom->id}", [
        'name' => 'Updated',
    ]);

    $response->assertStatus(401);
});


test('owner can delete their escape room', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $user->id]);
    Room::factory()->create(['escape_room_id' => $escapeRoom->id]);

    $response = $this->actingAs($user)->deleteJson("/api/v1/escape-room/{$escapeRoom->id}");

    $response->assertStatus(200);
    $response->assertJson([
        'message' => 'Escape room został pomyślnie usunięty'
    ]);

    $this->assertDatabaseMissing('escape_rooms', [
        'id' => $escapeRoom->id,
    ]);
});

test('user cannot delete escape room they do not own', function () {
    $owner = User::factory()->create();
    $otherUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $owner->id]);

    $response = $this->actingAs($otherUser)->deleteJson("/api/v1/escape-room/{$escapeRoom->id}");

    $response->assertStatus(404);

    $this->assertDatabaseHas('escape_rooms', [
        'id' => $escapeRoom->id,
    ]);
});

test('delete requires authentication', function () {
    $escapeRoom = EscapeRoom::factory()->create();

    $response = $this->deleteJson("/api/v1/escape-room/{$escapeRoom->id}");

    $response->assertStatus(401);
});

test('deleting escape room deletes associated rooms and assets', function () {
    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $user->id]);
    $room = Room::factory()->create(['escape_room_id' => $escapeRoom->id]);
    $asset = Asset::factory()->create();
    RoomAsset::factory()->create(['room_id' => $room->id, 'asset_id' => $asset->id]);

    $this->actingAs($user)->deleteJson("/api/v1/escape-room/{$escapeRoom->id}");

    $this->assertDatabaseMissing('rooms', ['id' => $room->id]);
    $this->assertDatabaseMissing('room_assets', ['room_id' => $room->id]);
});


test('user can get their own escape rooms', function () {
    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $myRoom = EscapeRoom::factory()->create(['user_id' => $user->id]);
    $otherRoom = EscapeRoom::factory()->create(['user_id' => $otherUser->id]);

    $response = $this->actingAs($user)->getJson('/api/v1/escape-room/my/rooms');

    $response->assertStatus(200);

    $ids = collect($response->json('data'))->pluck('id')->toArray();
    expect($ids)->toContain((string) $myRoom->id);
    expect($ids)->not->toContain((string) $otherRoom->id);
});

test('get user escape rooms requires authentication', function () {
    $response = $this->getJson('/api/v1/escape-room/my/rooms');

    $response->assertStatus(401);
});

test('user escape rooms can be paginated', function () {
    $user = User::factory()->create();
    EscapeRoom::factory()->count(15)->create(['user_id' => $user->id]);

    $response = $this->actingAs($user)->getJson('/api/v1/escape-room/my/rooms?per_page=5');

    $response->assertStatus(200);
    expect($response->json('per_page'))->toBe(5);
    expect(count($response->json('data')))->toBe(5);
});


test('anyone can get escape room leaderboard', function () {
    $escapeRoom = EscapeRoom::factory()->create();

    $response = $this->getJson("/api/v1/escape-room/{$escapeRoom->id}/leaderboard");

    $response->assertStatus(200);
    expect($response->json())->toBeArray();
});

test('leaderboard returns 404 for non-existent escape room', function () {
    $response = $this->getJson('/api/v1/escape-room/99999/leaderboard');

    $response->assertStatus(404);
});


test('owner can update escape room files', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $user->id]);

    $newThumbnail = UploadedFile::fake()->image('new-thumbnail.png');

    $response = $this->actingAs($user)->postJson("/api/v1/escape-room/{$escapeRoom->id}/files", [
        'thumbnail' => $newThumbnail,
    ]);

    $response->assertStatus(200);
    $response->assertJson([
        'message' => 'Pliki zostały zaktualizowane'
    ]);

    $escapeRoom->refresh();
    expect($escapeRoom->thumbnail_url)->not->toBeNull();
});

test('user cannot update files for escape room they do not own', function () {
    Storage::fake('public');

    $owner = User::factory()->create();
    $otherUser = User::factory()->create();
    $escapeRoom = EscapeRoom::factory()->create(['user_id' => $owner->id]);

    $thumbnail = UploadedFile::fake()->image('thumbnail.png');

    $response = $this->actingAs($otherUser)->postJson("/api/v1/escape-room/{$escapeRoom->id}/files", [
        'thumbnail' => $thumbnail,
    ]);

    $response->assertStatus(404);
});

test('update files requires authentication', function () {
    $escapeRoom = EscapeRoom::factory()->create();

    $response = $this->postJson("/api/v1/escape-room/{$escapeRoom->id}/files", []);

    $response->assertStatus(401);
});