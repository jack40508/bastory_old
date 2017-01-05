<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game\BatterReord;

class Ballpath extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'ballpaths';
    protected $fillable = [
    	'name',
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
