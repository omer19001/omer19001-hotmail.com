<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    // 
    protected $fillable = [
        'name', 'phone_number', 'balance', 'username','password','image',
    ];
    public function products()
    {
        return $this->belongsToMany('App\product')->withPivot('driver_id', 'credit_id')
    	->withTimestamps();
    }
    public function credits()
    {
        return $this->hasMany('App\credit');
    }
}
