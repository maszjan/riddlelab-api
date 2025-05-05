<?php

namespace App\Http\Controllers\Api;

use App\Enums\AssetType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreAssetRequest;
use App\Models\Asset;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{

    public function getMyAssets(): JsonResponse
    {
        $userId = auth()->id();

        $assets = Asset::where('owner_id', $userId)
            ->orWhere('is_public', true)
            ->get();

        $grouped = $assets->groupBy('type');

        $response = [];
        foreach (AssetType::values() as $type) {
            $response[$type] = $grouped->get($type, collect())->values();
        }

        return response()->json($response);
    }

    public function getAsset(int $id): JsonResponse
    {
        $asset = Asset::findOrFail($id);

        if (!$asset->is_public && $asset->owner_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized access'], 403);
        }

        if (!Storage::disk('public')->exists($asset->image_url)) {
            return response()->json(['message' => 'Image not found'], 404);
        }

        $publicPath = 'storage/' . $asset->image_url;

        return response()->json([
            'url' => asset($publicPath),
            'asset' => $asset
        ]);
    }


    public function createAsset(StoreAssetRequest $request): JsonResponse
    {
        $user = auth()->user();
        $file = $request->file('image');
        $validatedData = $request->validated();

        $targetPath = 'users/' . $user->name . '/textures/' . $validatedData['type'];

        if (!Storage::disk('public')->exists($targetPath)) {
            Storage::disk('public')->makeDirectory($targetPath, true);
        }

        $assetCount = Asset::where('owner_id', $user->id)->count();
        $assetLimit = $user->getAssetLimit();


        if ($assetLimit !== -1 && $assetCount >= $assetLimit) {
            return response()->json([
                'message' => 'Osiągnięto limit liczby zasobów'
            ], 403);
        }

        $path = $file->storeAs(
            $targetPath,
            $file->getClientOriginalName(),
            'public'
        );

        $asset = Asset::create([
            'name' => $validatedData['name'],
            'type' => $validatedData['type'],
            'image_url' => $path,
            'has_collider' => $validatedData['has_collider'] ?? false,
            'owner_id' => $user->id,
        ]);

        return response()->json([
            'message' => 'Zasób został utworzony pomyślnie',
            'asset' => $asset
        ], 201);
    }

    public function destroyAsset(int $id)
    {
        $asset = Asset::findOrFail($id);

        if (!$asset->is_public && $asset->owner_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized access'], 403);
        }

        // TODO  after handling some saving rooms/e-rooms etc. bring protecting before removing assets used in saved maps

        $asset->delete();

        return response()->json(['success' => 'Asset został usunięty pomyślnie'], 204);
    }



}
