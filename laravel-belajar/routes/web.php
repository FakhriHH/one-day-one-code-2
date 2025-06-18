<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;

Route::get('hello', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', [HaloController::class, 'index']);

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'handleForm']);

Route::get('/mahasiswa', [FormController::class, 'listMahasiswa']);
