<?php
namespace App\Accounts;

use Hchs\Judge\Permission\AuthEloquent as Authenticatable;
use App\Live\LivePitch;
use App\Live\LiveBatter;
use App\Live\LiveFielding;
use App\Game\BatterRecord;
use App\Game\FieldingRecord;
use App\Game\PitchRecord;

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
    public function batterRecords()
    {
        return $this->hasMany(BatterRecord::class);
    }
    public function fieldingRecords()
    {
        return $this->hasMany(FieldingRecord::class);
    }
    public function pitchRecords()
    {
        return $this->hasMany(PitchRecord::class);
    }
}
