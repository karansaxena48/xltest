<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
    public function index(Request $request) {
        $id = $request->id;
        return State::where('country_id', $id)->get();
    }
}
