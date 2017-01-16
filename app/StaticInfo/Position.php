<?php

namespace App\StaticInfo;

use Illuminate\Database\Eloquent\Model;
use App\Game\BatterReord;

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
    public function batterRecords()
    {
    	return $this->hasManny(BatterReord::class);
    }
}
