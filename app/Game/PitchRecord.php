<?php

namespace App\Game;

use Illuminate\Database\Eloquent\Model;
use App\Accounts\Player;

class PitchRecord extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'pitch_records';
    protected $fillable = [
    	'game_id',
    	'player_id',
    	'inning_pitched',
    	'strike',
    	'ball',
    	'strike_out',
    	'base_on_ball',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    /**
     *  一場投球紀錄 屬於 一場比賽
     */
    public function game()
    {
    	return $this->belongsTo(Game::class);
    }

    /**
     *  一場投球紀錄 屬於 一名球員
     */
    public function player()
    {
    	return $this->belongsTo(Player::class);
    }
}
