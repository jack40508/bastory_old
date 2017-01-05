<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game\BatterReord;

class PlayType extends Model
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = 'play_types';
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
     *  一種Play 對 多次打擊紀錄
     */
    public function batterRecords()
    {
    	return $this->hasManny(BatterReord::class);
    }
}
