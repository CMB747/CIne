<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premiere extends Model
{
    protected $fillable = [
        'start',
        'end',
        'available',
        'type'
    ];
}
