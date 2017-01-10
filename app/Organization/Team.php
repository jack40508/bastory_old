<?php

namespace App\Organization;

use Illuminate\Database\Eloquent\Model;
use App\Game\Game;
use App\Accounts\Player;

// 所有多對多 中介表還沒建完
class Team extends Model
{
    protected $table ="teams";
    protected $fillable =[
        'name',                 //球隊名稱
        'about',                //球隊簡介
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
    public function season()
    {
        return $this->belongsToMany(Season::class);
    }
    public function Players()
    {
        return $this->belongsToMany(Player::class);
    }
}
