<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = [
        'name', 'price', 'offer_price', 'image',
    ];
    public function clients()
    {
        return $this->belongsToMany('App\client')->withPivot('driver_id', 'credit_id','delivery_location')
    	->withTimestamps();
    }
    public function drivers()
    {
        return $this->belongsToMany('App\driver')->withPivot('client_id', 'credit_id','delivery_location')
    	->withTimestamps();
    }
 
}
