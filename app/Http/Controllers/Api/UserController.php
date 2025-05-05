<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function getUserAssetLimit(): JsonResponse
    {
        $user = auth()->user();
        $assetCount = Asset::where('owner_id', $user->id)->count();
        $assetLimit = $user->getAssetLimit();

        $percentage = ($assetLimit !== -1 && $assetLimit > 0) ? ($assetCount / $assetLimit * 100) : 0;

        return response()->json([
            'asset_count' => $assetCount,
            'asset_limit' => $assetLimit,
            'asset_percentage' => $percentage,
            'is_unlimited' => $assetLimit === -1
        ]);
    }




}
