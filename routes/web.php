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
})->name('welcome');

Route::get('/prueba', function () {
    return view('layouts/front_end');
});

Route::get('/seguridad', function () {
    return view('layouts/security');
});

Route::get('/solicitudes', function () {
    return view('user/solicitudes');
});

Route::get('/cultos', function () {
    return view('user/worship');
});