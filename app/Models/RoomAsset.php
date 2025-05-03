<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomAsset extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'asset_id',
        'position_row',
        'position_col',
        'rotation',
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    public function getAssetType(): string
    {
        return $this->asset->type;
    }
}
