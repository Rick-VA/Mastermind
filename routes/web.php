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

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/play', function () {
    return view('game');
});

Route::post('/play', function () {
    return view('game');
});



Route::get('/uitleg', function () {
    return view('uitleg');
});

Route::get('/uitleg-user', function () {
    return view('uitleg-login');
});

Route::post('/game', [App\Http\Controllers\Mastermindgame::class, 'game']);


Route::get('/test', [App\Http\Controllers\test::class, 'show']);

Route::get('/code', [App\Http\Controllers\users::class, 'code']);

Route::get('/total', [App\Http\Controllers\total::class, 'total']);

