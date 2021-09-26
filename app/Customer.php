<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'dob',
        'gender',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function cars(){
        return $this->belongsToMany('App\Car');
    }

}
