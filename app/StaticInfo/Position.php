<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'positions';
    protected $fillable = [
    	'name',
    	'code',
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
