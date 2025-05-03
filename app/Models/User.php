<?php

namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'avatar_url',
        'player_configuration',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class,
            'player_configuration' => 'array',
        ];
    }

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class, 'owner_id');
    }

    public function escapeRooms(): HasMany
    {
        return $this->hasMany(EscapeRoom::class);
    }

    public function riddles(): HasMany
    {
        return $this->hasMany(Riddle::class, 'creator_id');
    }

    public function attempts(): HasMany
    {
        return $this->hasMany(Attempt::class);
    }

    public function leaderboardEntries(): HasMany
    {
        return $this->hasMany(Leaderboard::class);
    }
}
