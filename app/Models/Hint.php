<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hint extends Model
{
    use HasFactory;

    protected $fillable = [
        'riddle_id',
        'hint_text',
    ];

    public function riddle(): BelongsTo
    {
        return $this->belongsTo(Riddle::class);
    }
}
