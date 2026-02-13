<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attempt_riddles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attempt_id')->constrained('attempts');
            $table->foreignId('riddle_id')->constrained('riddles');
            $table->foreignId('mini_game_id')->nullable()->constrained('mini_games')->nullOnDelete();
            $table->timestamp('started_at')->nullable();
            $table->unsignedInteger('time_to_solve')->nullable();
            $table->boolean('hint_used')->default(false);
            $table->boolean('solved')->default(false);
            $table->unsignedInteger('attempt_number')->default(0);
            $table->unsignedInteger('max_attempts')->default(3);
            $table->timestamps();

            $table->unique(['attempt_id', 'riddle_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attempt_riddles');
    }
};
