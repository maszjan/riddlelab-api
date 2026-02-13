<?php

use App\Http\Controllers\Api\AssetController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EscapeRoomController;
use App\Http\Controllers\Api\GameHistoryController;
use App\Http\Controllers\Api\LeaderboardController;
use App\Http\Controllers\Api\MiniGameController;
use App\Http\Controllers\Api\PlayController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

require __DIR__.'/channels.php';

Broadcast::routes(['middleware' => ['auth:sanctum']]);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {

    Route::prefix('auth')->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::post('register', 'register');
            Route::post('login', 'login');
            Route::middleware('auth:sanctum')->group(function () {
                Route::post('logout', 'logout');
            });
        });
    });

    Route::prefix('asset')->group(function () {
        Route::controller(AssetController::class)->group(function () {
            Route::middleware('auth:sanctum')->group(function () {
                Route::get('/my', 'getMyAssets');
                Route::get('/{id}', 'getAsset');
                Route::post('/','createAsset');
                Route::delete('/{id}', 'destroyAsset');
            });
        });
    });

    Route::prefix('leaderboard')->group(function () {
        Route::controller(LeaderboardController::class)->group(function () {
            Route::middleware('auth:sanctum')->group(function () {
                Route::get('/', 'index');
                Route::get('/room/{escapeRoomId}', 'room');
            });
        });
    });

    Route::prefix('user')->group(function () {
        Route::controller(UserController::class)->group(function () {
            Route::middleware('auth:sanctum')->group(function () {
                Route::get('/asset/limit', 'getUserAssetLimit');
                Route::get('/stats', 'getUserStats');
                Route::put('/profile',  'updateProfile');
                Route::put('/password',  'updatePassword');
                Route::put('/appearance',  'updateAppearance');
            });
        });
    });

    Route::prefix('escape-room')->group(function () {
        Route::controller(EscapeRoomController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
            Route::get('/{id}/leaderboard', 'getLeaderboard');

            Route::middleware('auth:sanctum')->group(function () {
                Route::post('/', 'store');
                Route::put('/{id}', 'update');
                Route::post('/{id}/files', 'updateFiles');
                Route::delete('/{id}', 'destroy');
                Route::get('/my/rooms', 'getUserEscapeRooms');
            });
        });
    });

    Route::prefix('game-history')->group(function () {
        Route::controller(GameHistoryController::class)->group(function () {
            Route::middleware('auth:sanctum')->group(function () {
                Route::get('/', 'index');
            });
        });
    });


    Route::prefix('mini-game')->group(function () {
        Route::controller(MiniGameController::class)->group(function () {
            Route::middleware('auth:sanctum')->group(function () {
                Route::get('/', 'index');
                Route::post('/generate', 'generate');
                Route::post('/attempt/{attemptId}/submit', 'submit');
            });
        });
    });

    Route::prefix('play')->group(function () {
        Route::controller(PlayController::class)->group(function () {
            Route::middleware('auth:sanctum')->group(function () {
                Route::get('/escape-room/{escapeRoomId}/soundtrack', 'getSoundtrack');
                Route::post('/escape-room/{escapeRoomId}/start', 'startAttempt');
                Route::post('/attempt/{attemptId}/riddle/solve', 'solveRiddle');
                Route::post('/attempt/{attemptId}/riddle/{riddleId}/hint', 'useHint');
                Route::post('/attempt/{attemptId}/next-room', 'nextRoom');
                Route::post('/attempt/{attemptId}/time', 'updateTime');
                Route::post('/attempt/{attemptId}/pause', 'pauseAttempt');
                Route::post('/attempt/{attemptId}/resume', 'resumeAttempt');
                Route::post('attempt/{attemptId}/abandon', 'abandonAttempt');
                Route::post('/attempt/{attemptId}/fail', 'failAttempt');
            });
        });
    });

    Route::get('/img/{path}', function ($path) {
        $fullPath = storage_path('app/public/' . $path);

        if (!file_exists($fullPath)) {
            abort(404, 'Image not found');
        }

        $mimeType = mime_content_type($fullPath);

        return response()->file($fullPath, [
            'Content-Type' => $mimeType,
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'GET, OPTIONS',
            'Access-Control-Allow-Headers' => 'Content-Type',
            'Cache-Control' => 'public, max-age=31536000',
        ]);
    })->where('path', '.*');

});
