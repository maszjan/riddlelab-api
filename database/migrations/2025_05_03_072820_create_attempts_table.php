<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('escape_room_id')->constrained('escape_rooms');
            $table->timestamp('start_time');
            $table->timestamp('end_time')->nullable();
            $table->boolean('completed')->default(false);
            $table->integer('time_spent')->nullable();
            $table->integer('hints_used')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attempts');
    }
};
