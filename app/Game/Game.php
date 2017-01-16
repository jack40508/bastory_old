<?php

namespace App\Game;

use Illuminate\Database\Eloquent\Model;
use App\Organization\Team;
use App\Accounts\Player;

class Game extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'games';
    protected $fillable = [
    	'name',
        'team_id',
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

    public function team()
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

    public function batterRecords()
    {
        return $this->hasMany(BatterRecord::class);
    }

    /**
     *  一場比賽 對 多筆投球紀錄
     */

    public function pitchRecords()
    {
        return $this->hasMany(PitchRecord::class);
    }

    /**
     *  一場比賽 對 多筆守備紀錄
     */

    public function fieldingRecords()
    {
        return $this->hasMany(FieldingRecord::class);
    }
}
