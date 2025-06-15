<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;

Route::get('hello', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', [HaloController::class, 'index']);
