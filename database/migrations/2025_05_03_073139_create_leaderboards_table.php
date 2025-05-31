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
            $table->integer('completion_time'); // in seconds
            $table->integer('hints_used')->default(0);
            $table->integer('attempt_count')->default(1);
            $table->integer('position');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leaderboards');
    }
};