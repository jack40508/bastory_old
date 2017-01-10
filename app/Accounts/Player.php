<?php
namespace App\Accounts;

use Hchs\Judge\Permission\AuthEloquent as Authenticatable;
use App\Live\LivePitch;
use App\Live\LiveBatter;
use App\Live\LiveFielding;

class Player extends Authenticatable
{
    /*------------------------------------------------------------------------**
    ** Entity 定義                                                            **
    **------------------------------------------------------------------------*/
    protected $table = "players";

    protected $fillable = [
        'name',
        'email',
        'password',
        'nickname',
        'birth',
    ];

    /*------------------------------------------------------------------------**
    ** Relation 定義                                                          **
    **------------------------------------------------------------------------*/
    public function livePitches()
    {
        return $this->hasMany(LivePitch::class);
    }
    public function liveBatters()
    {
        return $this->hasMany(LiveBatter::class);
    }
    public function liveFieldings()
    {
        return $this->hasMany(LiveFielding::class);
    }
}
