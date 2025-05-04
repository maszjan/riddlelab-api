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

        $publicPath = str_replace('storage/app/public/', 'storage/', $asset->image_url);

        return response()->json([
            'url' => asset($publicPath),
            'asset' => $asset
        ]);
    }

    public function destroyAsset(int $id)
    {

    }

    public function createAsset(StoreAssetRequest $request): JsonResponse
    {
        $user = auth()->user();
        $file = $request->file('image');

        $userStorageUsed = $this->getUserStorageUsed($user->id);
        $userStorageLimit = $this->getUserStorageLimit($user->id);
        $fileSize = $file->getSize();

        if ($userStorageUsed + $fileSize > $userStorageLimit) {
            return response()->json([
                'message' => 'Przekroczono limit przestrzeni dyskowej'
            ], 403);
        }

        $validatedData = $request->validated();

        $path = $file->store('textures/' . $validatedData['type'], 'public');

        $asset = Asset::create([
            'name' => $validatedData['name'],
            'type' => $validatedData['type'],
            'image_url' => $path,
            'has_collider' => $validatedData['has_collider'] ?? false,
            'owner_id' => $user->id,
            'is_public' => $validatedData['is_public'] ?? false,
        ]);

        return response()->json([
            'message' => 'Zasób został utworzony pomyślnie',
            'asset' => $asset
        ], 201);
    }


}
