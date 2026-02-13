<?php

use App\Models\User;
use App\Models\Asset;
use App\Enums\AssetType;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('authenticated user can get their assets and public assets', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $myAsset = Asset::factory()->create([
        'owner_id' => $user->id,
        'is_public' => false,
        'type' => AssetType::Prop,
    ]);

    $publicAsset = Asset::factory()->create([
        'owner_id' => $otherUser->id,
        'is_public' => true,
        'type' => AssetType::Door,
    ]);

    $privateAsset = Asset::factory()->create([
        'owner_id' => $otherUser->id,
        'is_public' => false,
        'type' => AssetType::Riddle,
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/asset/my');

    $response->assertStatus(200);

    $data = $response->json();

    foreach (AssetType::values() as $type) {
        expect($data)->toHaveKey($type);
    }

    $propAssets = collect($data[AssetType::Prop->value]);
    expect($propAssets->pluck('id')->toArray())->toContain($myAsset->id);

    $doorAssets = collect($data[AssetType::Door->value]);
    expect($doorAssets->pluck('id')->toArray())->toContain($publicAsset->id);

    $riddleAssets = collect($data[AssetType::Riddle->value]);
    expect($riddleAssets->pluck('id')->toArray())->not->toContain($privateAsset->id);
});

test('unauthenticated user cannot get assets', function () {
    $response = $this->getJson('/api/v1/asset/my');

    $response->assertStatus(401);
});


test('user can get their own asset', function () {
    Storage::fake('public');

    $user = User::factory()->create();

    $asset = Asset::factory()->create([
        'owner_id' => $user->id,
        'is_public' => false,
        'image_url' => 'test-image.png',
    ]);

    Storage::disk('public')->put($asset->image_url, 'fake-content');

    $response = $this->actingAs($user)->getJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'url',
        'asset' => ['id', 'name', 'type', 'image_url', 'owner_id', 'is_public']
    ]);

    expect($response->json('asset.id'))->toBe($asset->id);
});

test('user can get public asset', function () {
    Storage::fake('public');

    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $asset = Asset::factory()->create([
        'owner_id' => $otherUser->id,
        'is_public' => true,
        'image_url' => 'public-image.png',
    ]);

    Storage::disk('public')->put($asset->image_url, 'fake-content');

    $response = $this->actingAs($user)->getJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(200);
    expect($response->json('asset.id'))->toBe($asset->id);
});

test('user cannot get private asset from another user', function () {
    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $asset = Asset::factory()->create([
        'owner_id' => $otherUser->id,
        'is_public' => false,
    ]);

    $response = $this->actingAs($user)->getJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(403);
    $response->assertJson(['message' => 'Unauthorized access']);
});

test('returns 404 when asset image does not exist', function () {
    Storage::fake('public');

    $user = User::factory()->create();

    $asset = Asset::factory()->create([
        'owner_id' => $user->id,
        'image_url' => 'non-existent-image.png',
    ]);

    $response = $this->actingAs($user)->getJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(404);
    $response->assertJson(['message' => 'Image not found']);
});

test('returns 404 when asset does not exist', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->getJson('/api/v1/asset/99999');

    $response->assertStatus(404);
});


test('user can create asset', function () {
    Storage::fake('public');

    $user = User::factory()->create();

    $file = UploadedFile::fake()->image('test-asset.png', 64, 64);

    $response = $this->actingAs($user)->postJson('/api/v1/asset', [
        'name' => 'Test Asset',
        'type' => AssetType::Prop->value,
        'image' => $file,
    ]);

    $response->assertStatus(201);
    $response->assertJson([
        'message' => 'Zasób został utworzony pomyślnie'
    ]);

    $this->assertDatabaseHas('assets', [
        'name' => 'Test Asset',
        'type' => AssetType::Prop->value,
        'owner_id' => $user->id,
    ]);

    $asset = Asset::where('name', 'Test Asset')->first();

    Storage::disk('public')->assertExists($asset->image_url);
    expect($asset->image_url)->toContain('users/' . $user->name . '/textures/prop');
});


test('user cannot create asset when limit reached', function () {
    Storage::fake('public');

    $user = User::factory()->create();

    $assetLimit = $user->getAssetLimit();

    if ($assetLimit !== -1) {
        Asset::factory()->count($assetLimit)->create([
            'owner_id' => $user->id,
        ]);

        $file = UploadedFile::fake()->image('test-asset.png', 64, 64);

        $response = $this->actingAs($user)->postJson('/api/v1/asset', [
            'name' => 'Excess Asset',
            'type' => AssetType::Prop->value,
            'image' => $file,
        ]);

        $response->assertStatus(403);
        $response->assertJson([
            'message' => 'Osiągnięto limit liczby zasobów'
        ]);
    } else {
        expect(true)->toBeTrue();
    }
});

test('create asset requires authentication', function () {
    Storage::fake('public');

    $file = UploadedFile::fake()->image('test-asset.png');

    $response = $this->postJson('/api/v1/asset', [
        'name' => 'Test Asset',
        'type' => AssetType::Prop->value,
        'image' => $file,
    ]);

    $response->assertStatus(401);
});

test('create asset validates required fields', function () {
    Storage::fake('public');

    $user = User::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/asset', []);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'type', 'image']);
});

test('create asset validates image must be file', function () {
    Storage::fake('public');

    $user = User::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/asset', [
        'name' => 'Test Asset',
        'type' => AssetType::Prop->value,
        'image' => 'not-a-file',
    ]);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['image']);
});


test('user can delete their own asset', function () {
    $user = User::factory()->create();

    $asset = Asset::factory()->create([
        'owner_id' => $user->id,
        'is_public' => false,
    ]);

    $response = $this->actingAs($user)->deleteJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('assets', [
        'id' => $asset->id,
    ]);
});

test('user can delete public asset they own', function () {
    $user = User::factory()->create();

    $asset = Asset::factory()->create([
        'owner_id' => $user->id,
        'is_public' => true,
    ]);

    $response = $this->actingAs($user)->deleteJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('assets', [
        'id' => $asset->id,
    ]);
});

test('user cannot delete asset owned by another user', function () {
    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $asset = Asset::factory()->create([
        'owner_id' => $otherUser->id,
        'is_public' => false,
    ]);

    $response = $this->actingAs($user)->deleteJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(403);
    $response->assertJson(['message' => 'Unauthorized access']);

    $this->assertDatabaseHas('assets', [
        'id' => $asset->id,
    ]);
});

test('delete asset requires authentication', function () {
    $asset = Asset::factory()->create();

    $response = $this->deleteJson("/api/v1/asset/{$asset->id}");

    $response->assertStatus(401);
});

test('delete returns 404 for non-existent asset', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->deleteJson('/api/v1/asset/99999');

    $response->assertStatus(404);
});