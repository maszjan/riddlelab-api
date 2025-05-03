<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        try {
            $result = $this->authService->register($request->validated());

            return response()->json($result, 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Rejestracja nie powiodła się',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $result = $this->authService->login($request->only('email', 'password'));

            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Logowanie nie powiodło się',
                'error' => $e->getMessage()
            ], 401);
        }
    }

    public function logout(Request $request): JsonResponse
    {
        try {
            $result = $this->authService->logout($request);

            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Wylogowanie nie powiodło się',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
