<?php

namespace App\Game;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $table = 'games';
    protected $fillable = [
    		'name',
    		'location',
    		'address',
    		'datetime',
    		'gather_at',
    		'category',
    		'contant',

    ];
}
