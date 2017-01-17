<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LivePlayPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_play_player', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('live_player_id')->unsigned()->nullable();
            $table->integer('player_id')->unsigned()->nullable();
            $table->timestamps();

            //foreign Key Set
            $table->foreign('live_player_id')->references('id')->on('live_plays');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_play_player');
    }
}
