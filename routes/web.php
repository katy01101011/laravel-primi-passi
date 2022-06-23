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

// HEADER
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/corsi', function () {
    return view('corsi');
})->name('corsi');

Route::get('/academy', function () {
    return view('academy');
})->name('academy');

Route::get('/aziende', function () {
    return view('aziende');
})->name('aziende');

Route::get('/eventi', function () {
    return view('eventi');
})->name('eventi');