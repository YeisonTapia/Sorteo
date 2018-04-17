<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Carbon\Carbon;
use App\Settings;

class ParticipantController extends Controller
{
    public function index ()
    {
        $winner = Participant::where('iswinner', 1)->first();
    	return view ('welcome', compact('winner'));
    }

    public function store(Request $request)
    {

    	$validatedData = $request->validate([
		    'name' => 'required',
		    'lastname' => 'required',
    		'ident' => 'required|unique:participants|numeric',
    		'email' => 'required|email',
    		'phone' => 'required|numeric',
    		'city_id' => 'required',
    		'department_id' => 'required',
    		'protecteddata' => 'required',
		]);

    	$participant = Participant::create([
    		'name' => $request['name'],
    		'lastname' => $request['lastname'],
    		'ident' => $request['ident'],
    		'email' => $request['email'],
    		'phone' => $request['phone'],
    		'city_id' => $request['city_id'],
    		'department_id' => $request['department_id'],
    		'protecteddata' => $request['protecteddata'],
    	]);

        return redirect ('/')->with('message','store');
    }


}
