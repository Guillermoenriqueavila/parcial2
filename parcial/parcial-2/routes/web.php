<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return view('welcome');
});

*/  

Route::get("/",[HomeController::class, 'index'])->name('Home');
Route::get("Contactanos",[ContactanosController::class, 'index'])->name('Contactanos');

Route::get("Reserva",[ReservaController::class, 'index'])->name('Reserva');