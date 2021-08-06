<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index() {
        return view('layouts.passengers', ['passengers' => \App\Models\Passenger::all()]);
    }

    public function show($id) {
        return view('layouts.passengerUpdate', ['passengers' => \App\Models\Passenger::find($id)]);
    }

    public function store(Request $request) {
        $this->validate($request, ['firstname' => 'required|unique:passengers,firstname', 'flight_id' => 'required']);
        $p = new \App\Models\Passenger();
        $p->firstname = $request['firstname'];
        $p->flight_id = $request['flight_id'];
        $p->save();
        return redirect('/passengers');
    }

    public function update($id, Request $request){
        $this->validate($request, ['firstname' => 'required|unique:passengers,firstname', 'flight_id' => 'required']);
        $p = \App\Models\Passenger::find($id);
        $p->firstname = $request['firstname'];
        $p->flight_id = $request['flight_id'];
        $p->save();
        return redirect('/passengers');
    }

    public function destroy($id){
        \App\Models\Passenger::destroy($id);
        return redirect('/passengers');
    }
}
