<?php

namespace App\Services;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthService
{

    public function register(array $data): array
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => UserRole::User->value,
            'player_configuration' => json_encode([
                'avatar' => [
                    'skin_color' => $data['player_configuration']['avatar']['skin_color'] ?? '#f5d0c5',
                    'hair_color' => $data['player_configuration']['avatar']['hair_color'] ?? '#2a1b0a',
                    'eye_color' => $data['player_configuration']['avatar']['eye_color'] ?? '#3d6e67',
                    'outfit_color' => $data['player_configuration']['avatar']['outfit_color'] ?? '#4287f5'
                ]
            ])
        ]);

        $token = $user->createToken('auth-token')->plainTextToken;

        return [
            'message' => 'Użytkownik zarejestrowany pomyślnie',
            'user' => $user,
            'token' => $token
        ];
    }


    public function login(array $credentials): array
    {
        if (!Auth::attempt($credentials)) {
            throw new \Exception('Nieprawidłowe dane logowania');
        }

        $user = Auth::user();

        $user->last_login_at = now();
        $user->save();

        $token = $user->createToken('auth-token')->plainTextToken;

        return [
            'message' => 'Zalogowano pomyślnie',
            'user' => $user,
            'token' => $token
        ];
    }


    public function logout($request): array
    {
        $request->user()->currentAccessToken()->delete();

        return [
            'message' => 'Wylogowano pomyślnie'
        ];
    }
}
