<?php

use App\Models\Attempt;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('attempt.{attemptId}', function ($user, $attemptId) {
    return Attempt::where('id', $attemptId)
        ->where('user_id', $user?->id)
        ->exists();
});
