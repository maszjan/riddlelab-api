<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttemptRiddle extends Model
{
    use HasFactory;

    protected $fillable = [
        'attempt_id',
        'riddle_id',
        'solved',
        'time_to_solve',
        'attempt_number',
        'max_attempts',
        'mini_game_id'
    ];

    protected $casts = [
        'solved' => 'boolean',
    ];

    public function miniGame()
    {
        return $this->belongsTo(MiniGame::class);
    }

    public function attempt(): BelongsTo
    {
        return $this->belongsTo(Attempt::class);
    }

    public function riddle(): BelongsTo
    {
        return $this->belongsTo(Riddle::class);
    }
}
