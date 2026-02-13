<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MiniGameAttempt extends Model
{

    use  HasFactory;

    protected $fillable = [
        'attempt_riddle_id',
        'config',
        'session_log',
        'start_time',
        'end_time',
        'score',
        'moves_count',
        'success',
    ];

    protected $casts = [
        'config' => 'array',
        'session_log' => 'array',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'success' => 'boolean',
    ];

    public function attemptRiddle(): BelongsTo
    {
        return $this->belongsTo(AttemptRiddle::class, 'attempt_riddle_id');
    }


    public function getMiniGameTypeAttribute(): ?string
    {
        return $this->attemptRiddle?->miniGame?->type;
    }
}
