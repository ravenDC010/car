<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_Car extends Model
{
    protected $fillable = [
        'customer_id',
        'car_id',
        'start_date',
        'day',
    ];

}
