<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function bydepart($depart)
    {
    	$cities = City::where('department_id', $depart)->get();
    	return response()->json($cities);
    }
}
