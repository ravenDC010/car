<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'agency_id',
        'name',
        'number',
        'seat',
        'rent',
    ];

    public function agencies(){
        return $this->belongsTo('App\Agency');
    }

    // public function customers(){
    //     return $this->belongsToMany('App\Customer');
    // }
    
    public function customercars(){
        return $this->hasMany('App\CustomerCar');
    }


}
