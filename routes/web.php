<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [FlightController::class, 'index'])->name('flight.index');
Route::get('/passengers', [PassengerController::class, 'index'])->name('passenger.index');

Route::get('/{id}', [FlightController::class, 'show'])->name('flight.show');
Route::get('/passengers/{id}', [PassengerController::class, 'show'])->name('passenger.show');

Route::post('/', [FlightController::class, 'store'])->name('flight.store');
Route::post('/passengers', [PassengerController::class, 'store'])->name('passenger.store');

Route::put('/{id}', [FlightController::class, 'update'])->name('flight.update');
Route::put('/passengers/{id}', [PassengerController::class, 'update'])->name('passenger.update');

Route::delete('/{id}', [FlightController::class, 'destroy'])->name('flight.destroy');
Route::delete('/passengers/{id}', [PassengerController::class, 'destroy'])->name('passenger.destroy');
