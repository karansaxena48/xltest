<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name'
    ];

    public function detail() {
        return $this->hasMany('App\Detail');
    }

    public function state() {
        return $this->hasMany('App\State');
    }
}
