<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'user_id',
        'estd',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function cars(){
        return $this->hasMany('App\Car');
    }

}
