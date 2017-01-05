<?php

namespace App\Game;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'games';
    protected $fillable = [
    	'name',
    	'location',
    	'address',
    	'datetime',
    	'gather_at',
    	'category',
    	'contant',

    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    /**
     *  多場比賽 屬於 一個球隊
     */

    public function teams()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     *  多場比賽 對 多名球員
     */

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    /**
     *  一場比賽 對 多筆打擊紀錄
     */

    public function batter_records()
    {
        return $this->hasMany(BatterRecord::class);
    }

    /**
     *  一場比賽 對 多筆投球紀錄
     */

    public function pitch_records()
    {
        return $this->hasMany(PitchRecord::class);
    }

    /**
     *  一場比賽 對 多筆守備紀錄
     */

    public function denfense_records()
    {
        return $this->hasMany(DefenseRecord::class);
    }
}
