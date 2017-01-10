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
}
