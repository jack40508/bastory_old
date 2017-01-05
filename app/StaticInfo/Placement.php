<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
     *  一種飛行軌跡 對 多次打擊紀錄
     */
    public function batter_records()
    {
    	return $this->hasManny(BatterReord::class);
    }
}
