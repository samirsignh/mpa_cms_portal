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
// view page routers
Route::get('/', function () {
    return view('login_view');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('user_registration', function () {
    return view('user_view');
})->name('user_registration');