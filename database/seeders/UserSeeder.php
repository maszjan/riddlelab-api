<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@riddlelab.world',
            'password' => Hash::make('Password123@'),
            'role' => UserRole::Admin->value,
            'player_configuration' => json_encode([
                'avatar' => [
                    'skin_color' => '#f5d0c5',
                    'hair_color' => '#2a1b0a',
                    'eye_color' => '#3d6e67',
                    'outfit_color' => '#4287f5'
                ]
            ]),
            'last_login_at' => now(),
        ]);

        // Moderator
        User::create([
            'name' => 'moderator',
            'email' => 'mod@riddlelab.world',
            'password' => Hash::make('Password123@'),
            'role' => UserRole::Moderator->value,
            'player_configuration' => json_encode([
                'avatar' => [
                    'skin_color' => '#e8beac',
                    'hair_color' => '#000000',
                    'eye_color' => '#6b8e23',
                    'outfit_color' => '#b22222'
                ]
            ]),
            'last_login_at' => now(),
        ]);

        // Regular User
        User::create([
            'name' => 'tester',
            'email' => 'tester@riddlelab.world',
            'password' => Hash::make('Password123@'),
            'role' => UserRole::User->value,
            'player_configuration' => json_encode([
                'avatar' => [
                    'skin_color' => '#d2b48c',
                    'hair_color' => '#8b4513',
                    'eye_color' => '#1e90ff',
                    'outfit_color' => '#32cd32'
                ]
            ]),
            'last_login_at' => now(),
        ]);
    }
}
