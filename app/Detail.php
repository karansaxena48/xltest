<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'name', 'email', 'country_id', 'state_id', 'city_id'
    ];

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function state() {
        return $this->belongsTo('App\State');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }
}
