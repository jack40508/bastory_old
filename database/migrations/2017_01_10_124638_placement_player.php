<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlacementPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placement_player', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('placement_id')->unsigned()->nullable();
            $table->integer('player_id')->unsigned()->nullable();
            $table->timestamps();

            //foreign Key Set
            $table->foreign('placement_id')->references('id')->on('placements');
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
        Schema::dropIfExists('placement_player');
    }
}
