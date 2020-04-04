<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credit extends Model
{
    //
    protected $fillable = [
        'type', 'owner_name', 'cvv','expiry_date', 
    ];
    
    public function clients()
    {
        return $this->belongsTo('App\client');
    }
}
