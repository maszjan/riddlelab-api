<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Leaderboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'escape_room_id',
        'user_id',
        'completion_time',
        'hints_used',
        'attempt_count',
        'position',
    ];

    public function escapeRoom(): BelongsTo
    {
        return $this->belongsTo(EscapeRoom::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function topScores($limit = 10)
    {
        return $this->hasMany(Leaderboard::class)
            ->orderBy('position')
            ->limit($limit);
    }

}
