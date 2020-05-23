<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name', 'country_id'
    ];

    public function detail() {
        return $this->hasMany('App\Detail');
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function state() {
        return $this->hasMany('App\City');
    }
}
