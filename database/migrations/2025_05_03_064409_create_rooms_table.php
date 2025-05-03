<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escape_room_id')->constrained('escape_rooms');
            $table->json('grid_data');
            $table->json('walls_data');
            $table->string('floor_color');
            $table->string('wall_color');
            $table->float('wall_thickness');
            $table->foreignId('floor_texture_id')->nullable()->constrained('assets');
            $table->integer('starting_point_row');
            $table->integer('starting_point_col');
            $table->boolean('floor_accepted')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
