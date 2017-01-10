<?php

namespace App\Live;

use Illuminate\Database\Eloquent\Model;
use App\Game\Game;

class LivePlay extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = "play_type";
    protected $fillable = [
        'game_id',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    /**
     *  一場即時紀錄 屬於 一場比賽
     */
    public function game()
    {
        return $this->hasOne(Game::class);
    }

    /**
     *  一場比賽 對 多筆打擊紀錄
     */

    public function live_Batters()
    {
        return $this->hasMany(LiveBatter::class);
    }

    /**
     *  一場比賽 對 多筆投球紀錄
     */

    public function live_pitches()
    {
        return $this->hasMany(LivePitch::class);
    }

    /**
     *  一場比賽 對 多筆守備紀錄
     */

    public function live_fieldings()
    {
        return $this->hasMany(LiveFielding::class);
    }
}
