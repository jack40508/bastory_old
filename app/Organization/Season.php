<?php

namespace App\Organization;

use Illuminate\Database\Eloquent\Model;
use App\Game\Game;
use App\Accounts\Player;

// 所有多對多 中介表還沒建完
class Season extends Model
{
    protected $table ="seasons";
    protected $fillable =[
        'name',                 //季賽名稱
        'about',                //季賽簡介
    ];
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
