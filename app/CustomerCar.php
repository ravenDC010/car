<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerCar extends Model
{
    protected $fillable = [
        'customer_id',
        'car_id',
        'start_date',
        'day',
    ];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function car(){
        return $this->belongsTo('App\Car');
    }


}
