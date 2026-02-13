<?php

namespace App\Models;

use App\Enums\RiddleType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Riddle extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator_id',
        'name',
        'type',
        'question',
        'answer',
        'points',
    ];

    protected $casts = [
        'type' => RiddleType::class,
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function hints(): HasMany
    {
        return $this->hasMany(Hint::class);
    }

    public function roomRiddles(): HasMany
    {
        return $this->hasMany(RoomRiddle::class);
    }

    public function attemptRiddles(): HasMany
    {
        return $this->hasMany(AttemptRiddle::class);
    }
}
