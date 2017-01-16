<?php

namespace App\Live;

use Illuminate\Database\Eloquent\Model;
use App\Accounts\Player;
use App\StaticInfo\Ballpath;
use App\StaticInfo\PlayType;
use App\StaticInfo\Position;

class LiveBatter extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'live_batters';
    protected $fillable = [
    	'live_id',
    	'inning',
    	'player_id',
    	'play_type_id',
    	'ballpath_id',
    	'position_id',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    /**
     *  一次即時打擊紀錄 屬於 一場即時紀錄
     */
    public function livePlay()
    {
    	return $this->belongsTo(livePlay::class);
    }

    /**
     *  一次即時打擊紀錄 屬於 一名球員
     */
    public function player()
    {
    	return $this->belongsTo(Player::class);
    }

    /**
     *  一次即時打擊紀錄 屬於 一種play
     */
    public function playType()
    {
    	return $this->belongsTo(PlayType::class);
    }

    /**
     *  一次即時打擊紀錄 屬於 一種飛行軌跡
     */
    public function ballpath()
    {
    	return $this->belongsTo(Ballpath::class);
    }

    /**
     *  一次即時打擊紀錄 屬於 一種落點
     */
    public function position()
    {
    	return $this->belongsTo(Position::class);
    }
}
