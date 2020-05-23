<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    public function index(Request $request) {
        $id = $request->id;
        return City::where('state_id', $id)->get();
    }
}
