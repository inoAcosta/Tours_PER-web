<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/principal', function () {
    return view('principal');
});
Route::get('/reserva', function () {
    return view('reserva');
});
Route::get('/viajes', function () {
    return view('viajes');
});
Route::get('/clientes', function () {
    return view('clientes');
});
Route::get('/sitios', function () {
    return view('sitios');
});
Route::get('/costos', function () {
    return view('costos');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
