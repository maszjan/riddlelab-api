<?php

namespace App\Events;

use App\Models\Attempt;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AttemptStateUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Attempt $attempt,
        public string $action,
        public array $payload = []
    ) {}

    public function broadcastOn(): Channel
    {
        return new Channel('attempt.' . $this->attempt->id);
    }

    public function broadcastAs(): string
    {
        return 'attempt.updated';
    }

    public function broadcastWith(): array
    {
        return [
            'action' => $this->action,
            'attempt' => [
                'id' => $this->attempt->id,
                'current_room_id' => $this->attempt->current_room_id,
                'score' => $this->attempt->score,
                'time_spent' => $this->attempt->time_spent,
                'hints_used' => $this->attempt->hints_used,
                'collected_items' => $this->attempt->collected_items,
                'status' => $this->attempt->status,
            ],
            'payload' => $this->payload,
            'timestamp' => now()->toISOString(),
        ];
    }
}
