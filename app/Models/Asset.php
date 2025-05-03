<?php

namespace App\Models;

use App\Enums\AssetType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asset extends Model
{
    /** @use HasFactory<\Database\Factories\AssetFactory> */
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'name',
        'type',
        'image_url',
        'has_collider',
        'is_public',
    ];

    protected $casts = [
        'type' => AssetType::class,
        'has_collider' => 'boolean',
        'is_public' => 'boolean',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function roomAssets(): HasMany
    {
        return $this->hasMany(RoomAsset::class);
    }

    public function roomsAsFloorTexture(): HasMany
    {
        return $this->hasMany(Room::class, 'floor_texture_id');
    }

    public function roomsAsDoorTexture(): HasMany
    {
        return $this->hasMany(Room::class, 'door_texture_id');
    }
}
