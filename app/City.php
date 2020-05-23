<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'state_id'
    ];

    public function detail() {
        return $this->hasMany('App\Detail');
    }

    public function state() {
        return $this->belongsTo('App\State');
    }
}
