<?php

namespace App\Accounts;

use Hchs\Judge\Permission\AuthEloquent as Authenticatable;

class Player extends Authenticatable
{
    protected $table = "players";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}
