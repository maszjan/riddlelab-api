<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mini_games', function (Blueprint $table) {
            $table->id();


            $table->string('name');
            $table->string('type');
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('medium');


            $table->boolean('is_core')->default(false);
            $table->boolean('is_active')->default(true);

            $table->text('description')->nullable();
            $table->integer('estimated_time')->default(60);
            $table->integer('play_count')->default(0);

            $table->timestamps();

            $table->index(['type', 'difficulty']);
            $table->index('is_core');
            $table->index('is_active');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mini_games');
    }
};
