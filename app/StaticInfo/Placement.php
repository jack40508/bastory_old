<?php

namespace App\StaticInfo;

use Illuminate\Database\Eloquent\Model;
use App\Accounts\Player;

class Placement extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'placements';
    protected $fillable = [
    	'name',
    	'english_name',
    	'abbreviation',
        'team_id',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/

    /**
     *  多個守備位子 對 多名球員
     */
    public function players()
    {
    	return $this->belongsToMany(Player::class);
    }
}
