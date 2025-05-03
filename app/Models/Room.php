<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'escape_room_id',
        'grid_data',
        'walls_data',
        'floor_color',
        'wall_color',
        'wall_thickness',
        'floor_texture_id',
        'starting_point_row',
        'starting_point_col',
        'floor_accepted',
    ];

    protected $casts = [
        'grid_data' => 'array',
        'walls_data' => 'array',
        'wall_thickness' => 'float',
        'floor_accepted' => 'boolean',
    ];

    public function escapeRoom(): BelongsTo
    {
        return $this->belongsTo(EscapeRoom::class);
    }

    public function floorTexture(): BelongsTo
    {
        return $this->belongsTo(Asset::class, 'floor_texture_id');
    }

    public function roomAssets(): HasMany
    {
        return $this->hasMany(RoomAsset::class);
    }

    public function roomRiddles(): HasMany
    {
        return $this->hasMany(RoomRiddle::class);
    }

    public function getDoor()
    {
        return $this->roomAssets()
            ->whereHas('asset', function($query) {
                $query->where('type', 'door');
            })
            ->first();
    }
}
