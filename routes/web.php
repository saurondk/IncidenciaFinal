<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users',App\Http\Controllers\UserController::class);
Route::resource('alumnos',App\Http\Controllers\AlumnoController::class);
Route::resource('aulas',App\Http\Controllers\AulaController::class);
Route::resource('incidencias',App\Http\Controllers\IncidenciaController::class);
Route::resource('ordenadores',App\Http\Controllers\OrdenadoreController::class);
