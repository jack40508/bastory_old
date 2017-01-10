<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivePitchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_pitches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('live_play_id');
            $table->integer('player_id');
            $table->integer('inning_pitched');
            $table->integer('strike');
            $table->integer('ball');
            $table->integer('strike_out');
            $table->integer('base_on_ball');
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
        Schema::dropIfExists('live_pitches');
    }
}
