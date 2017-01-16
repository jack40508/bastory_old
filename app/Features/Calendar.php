<?php

namespace App\Features;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = "calendars";
    protected $fillable = [
        'title',
        'content',
        'started_at',
        'end_at',
    ];
}
