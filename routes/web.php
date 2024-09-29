<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/estudiantes-inscritos', [HomeController::class, 'estudiantes_inscritos'])->name('home.estudiantes_inscritos');
Route::get('/por-localidad', [HomeController::class, 'por_localidad'])->name('home.por_localidad');
