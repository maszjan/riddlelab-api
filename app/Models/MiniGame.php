<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MiniGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'difficulty',
        'is_core',
        'is_active',
        'description',
        'estimated_time',
        'play_count',
    ];

    protected $casts = [
        'is_core' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function riddle(): HasOne
    {
        return $this->hasOne(Riddle::class);
    }
}
