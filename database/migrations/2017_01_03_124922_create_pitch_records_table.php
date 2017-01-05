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
            $table->integer('game_id');
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
        Schema::dropIfExists('pitch_records');
    }
}
