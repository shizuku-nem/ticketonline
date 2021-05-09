<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::resource('photos', PhotoController::class);
Route::resource('users', UserController::class);
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

Route::get('/homepage', function () {
    return view('home');
});

Route::get('/tripinformation', function () {
    return view('tripinformation');
});

Auth::routes();

Route::get('/', [UserController::class, 'index']);
Route::get('/searchtrip', function() {
    return view('searchtrip');
})->name('searchtripview');

Route::post('/postlisttrip', function () {
    return view('listtrip');
});