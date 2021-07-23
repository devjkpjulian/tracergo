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
| Developed by July
*/

Route::get('/', function () {
    return view('start');
});

Route::get('/demo', function () {
    return view('demo');
})->name('demo');

Route::get('/trial', function () {
    return view('trial');
})->name('trial');

Route::post('subscribe/success', 'App\Http\Controllers\UserController@subscribe')->name('subscribe.success');

Route::post('search/users', 'App\Http\Controllers\UserController@search')->name('users.search');

Route::resource('visitors', 'App\Http\Controllers\VisitorController');

Route::resource('users', 'App\Http\Controllers\UserController');

Route::middleware(['auth:sanctum', 'verified'])->get('/subscribe', function () {
    return view('subscribe');
})->name('subscribe');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
