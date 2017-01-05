<?php

namespace App\Game;

use Illuminate\Database\Eloquent\Model;

class FieldingRecord extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'fielding_records';
    protected $fillable = [
    	'game_id',
    	'player_id',
    	'error',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    /**
     *  一場守備紀錄 屬於 一場比賽
     */
    public function game()
    {
    	return $this->belongsTo(Game::class);
    }

    /**
     *  一場守備紀錄 屬於 一名球員
     */
    public function player()
    {
    	return $this->belongsTo(Player::class);
    }
}
