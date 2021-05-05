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

Route::get('/welcome', function () {
    return view('welcome', ['name' => 'James']);
});

Route::get('/listtrip', function () {
    return view('listtrip');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tripinformation', function () {
    return view('tripinformation');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

Route::post('/', function () {
    return view('listtrip');
});