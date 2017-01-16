<?php

namespace App\Live;

use Illuminate\Database\Eloquent\Model;
use App\Accounts\Player;

class LiveFielding extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'live_fieldings';
    protected $fillable = [
    	'live_play_id',
    	'player_id',
    	'error',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    /**
     *  一次即時守備紀錄 屬於 一場即時紀錄
     */
    public function livePlay()
    {
    	return $this->belongsTo(livePlay::class);
    }

    /**
     *  一場即時守備紀錄 屬於 一名球員
     */
    public function player()
    {
    	return $this->belongsTo(Player::class);
    }
}
