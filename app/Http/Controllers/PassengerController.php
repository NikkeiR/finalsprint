<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index() {
        return view('layouts.passengers', ['passengers' => \App\Models\Passenger::all()]);
    }
}
