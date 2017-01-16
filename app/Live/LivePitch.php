<?php

namespace App\Live;

use Illuminate\Database\Eloquent\Model;
use App\Accounts\Player;

class LivePitch extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'live_pitches';
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
     *  一場即時投球紀錄 屬於 一場即時紀錄
     */
    public function livePlay()
    {
    	return $this->belongsTo(livePlay::class);
    }

    /**
     *  一場即時投球紀錄 屬於 一名球員
     */
    public function player()
    {
    	return $this->belongsTo(Player::class);
    }
}
