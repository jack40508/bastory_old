<?php

namespace App\Accounts;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Player extends Authenticatable
{
    protected $table = "players";

    protected $fillable = [
        'name',
        'email',
        'password',
        'nickname',
        'birth',
    ];

}
