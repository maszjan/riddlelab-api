<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Attempt;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function getUserAssetLimit(): JsonResponse
    {
        $user = auth()->user();
        $assetCount = Asset::where('owner_id', $user->id)->count();
        $assetLimit = $user->getAssetLimit();

        $percentage = ($assetLimit !== -1 && $assetLimit > 0)
            ? ($assetCount / $assetLimit * 100)
            : 0;

        return response()->json([
            'asset_count' => $assetCount,
            'asset_limit' => $assetLimit,
            'asset_percentage' => $percentage,
            'is_unlimited' => $assetLimit === -1
        ]);
    }

    public function getUserStats(): JsonResponse
    {
        $user = auth()->user();

        $completedAttempts = Attempt::where('user_id', $user->id)
            ->where('completed', true)
            ->get();

        $completedCount = $completedAttempts->count();
        $totalScore = $completedAttempts->sum('score');
        $averageScore = $completedCount > 0
            ? round($totalScore / $completedCount, 1)
            : 0;

        return response()->json([
            'completed_rooms' => $completedCount,
            'total_score' => $totalScore,
            'average_score' => $averageScore,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return response()->json([
            'message' => 'Profil zaktualizowany pomyślnie',
            'user' => $user
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', Password::min(8)
                ->mixedCase()
                ->numbers()
                ->symbols()],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'message' => 'Obecne hasło jest nieprawidłowe'
            ], 422);
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'message' => 'Hasło zmienione pomyślnie'
        ]);
    }

    public function updateAppearance(Request $request)
    {
        $request->validate([
            'player_configuration' => 'required|array',
            'player_configuration.avatar' => 'required|array',
            'player_configuration.avatar.skin_color' => 'required|string|regex:/^#([A-Fa-f0-9]{6})$/',
            'player_configuration.avatar.hair_color' => 'required|string|regex:/^#([A-Fa-f0-9]{6})$/',
            'player_configuration.avatar.eye_color' => 'required|string|regex:/^#([A-Fa-f0-9]{6})$/',
            'player_configuration.avatar.outfit_color' => 'required|string|regex:/^#([A-Fa-f0-9]{6})$/',
        ]);

        $user = Auth::user();
        $user->update([
            'player_configuration' => $request->player_configuration
        ]);

        return response()->json([
            'message' => 'Wygląd awatara zaktualizowany pomyślnie',
            'user' => $user
        ]);
    }
}
