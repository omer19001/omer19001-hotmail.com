<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_credit_driver_product extends Model
{
    //
    protected $table='client_credit_driver_product';
    protected $fillable = [
        'credit_id', 'driver_id', 'client_id', 'product_id', 'delivery_location' , 'qunatity' ,'total',
    ];
}
