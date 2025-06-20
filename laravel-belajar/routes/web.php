<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MahasiswaController;

Route::get('hello', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});


Route::get('/halo', [HaloController::class, 'index']);

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'handleForm']);

Route::get('/list-form', [FormController::class, 'listForm']);

Route::resource('mahasiswa', MahasiswaController::class);
