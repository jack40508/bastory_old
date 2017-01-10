<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiveBattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_batters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('live_play_id');
            $table->integer('round');
            $table->integer('player_id');
            $table->integer('play_type_id');
            $table->integer('ballpath_id');
            $table->integer('position_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_batters');
    }
}
