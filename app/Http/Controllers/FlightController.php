<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index() {
        return view('welcome', ['flights' => \App\Models\Flight::all()]);
    }

    public function show($id) {
        return view('layouts.flightUpdate', ['flights' => \App\Models\Flight::find($id)]);
    }

    public function store(Request $request) {
        $this->validate($request, ['flight' => 'required|unique:flights,name',]);
        $fl = new \App\Models\Flight();
        $fl->name = $request['flight'];
        $fl->save();
        return redirect('/');
    }
    
    public function update($id, Request $request){
        $this->validate($request, ['flight' => 'required|unique:flights,name',]);
        $fl = \App\Models\Flight::find($id);
        $fl->name = $request['flight'];
        $fl->save();
        return redirect('/');
    }
    
    public function destroy($id){
        \App\Models\Flight::destroy($id);
        return redirect('/');
    }

        
}
