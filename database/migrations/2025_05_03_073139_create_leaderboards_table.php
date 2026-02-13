<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escape_room_id')->constrained('escape_rooms');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedInteger('completion_time');
            $table->unsignedInteger('hints_used')->default(0);
            $table->unsignedInteger('attempt_count')->default(1);
            $table->unsignedInteger('position');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leaderboards');
    }
};
