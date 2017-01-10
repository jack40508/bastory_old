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
            $table->integer('live_play_id')->unsigned()->nullable();
            $table->integer('player_id')->unsigned()->nullable();
            $table->integer('inning_pitched');
            $table->integer('strike');
            $table->integer('ball');
            $table->integer('strike_out');
            $table->integer('base_on_ball');
            $table->timestamps();

            //foreign Key Set
            $table->foreign('live_play_id')->references('id')->on('live_plays')->onDelete('set null');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('set null');

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
