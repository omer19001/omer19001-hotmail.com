<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    //
    protected $fillable = [
        'name', 'phone_number','location', 'username','password','image','balance',
    ];
}
