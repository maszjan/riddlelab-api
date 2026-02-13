<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('room_riddles', function (Blueprint $table) {
            $table->integer('max_attempts')->default(3)->after('position_col');
        });
    }

    public function down(): void
    {
        Schema::table('room_riddles', function (Blueprint $table) {
            $table->dropColumn('max_attempts');
        });
    }
};
