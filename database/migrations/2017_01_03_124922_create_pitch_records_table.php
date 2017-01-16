<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitchRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitch_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned()->nullable();
            $table->integer('player_id')->unsigned()->nullable();
            $table->integer('inning_pitched');
            $table->integer('strike');
            $table->integer('ball');
            $table->integer('strike_out');
            $table->integer('base_on_ball');
            $table->timestamps();

            //foreign Key Set
            $table->foreign('game_id')->references('id')->on('games')->onDelete('set null');
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
        Schema::dropIfExists('pitch_records');
    }
}
