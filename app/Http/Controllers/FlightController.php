<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index() {
        return view('welcome', ['flights' => \App\Models\Flight::all()]);
    }

    public function store(Request $request) {
        $this->validate($request, ['flight' => 'required|unique:flights,name',]);
        $fl = new \App\Models\Flight();
        $fl->name = $request['flight'];
        $fl->save();
        return redirect('/');
    }
}
