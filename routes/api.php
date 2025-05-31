<?php

use App\Http\Controllers\Api\AssetController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EscapeRoomController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    Route::prefix('user')->group(function () {
        Route::controller(UserController::class)->group(function () {
            Route::middleware('auth:sanctum')->group(function () {
                Route::get('/asset/limit', 'getUserAssetLimit');
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
                Route::delete('/{id}', 'destroy');
                Route::get('/my/rooms', 'getUserEscapeRooms');
            });
        });
    });


});
