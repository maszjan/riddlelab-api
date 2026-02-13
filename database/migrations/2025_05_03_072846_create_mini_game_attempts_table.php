<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mini_game_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attempt_riddle_id')->nullable()->constrained('attempt_riddles')->nullOnDelete();
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->json('config')->nullable();
            $table->json('session_log')->nullable();
            $table->integer('score')->default(0);
            $table->integer('moves_count')->default(0);
            $table->boolean('success')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mini_game_attempts');
    }
};
