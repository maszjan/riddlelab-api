<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('attempts', function (Blueprint $table) {
            $table->foreignId('current_room_id')->nullable()->after('escape_room_id');
            $table->enum('status', ['active', 'paused', 'completed', 'abandoned', 'failed'])->default('active')->after('completed');
            $table->json('collected_items')->nullable()->after('hints_used');
            $table->unsignedInteger('score')->default(0)->after('time_spent');

            $table->foreign('current_room_id')->references('id')->on('rooms')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('attempts', function (Blueprint $table) {
            $table->dropForeign(['current_room_id']);
            $table->dropColumn(['current_room_id', 'status', 'collected_items', 'score']);
        });
    }
};
