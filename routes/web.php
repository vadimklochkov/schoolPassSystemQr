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
    return view('welcome');
});
Route::get('/regpass', function () {
    return view('regpass');
});
Route::get('/pass', function () {
    return view('pass');
});

Route::post('/pass', [App\Http\Controllers\PassController::class, 'getPass'])->name('getPass');
Route::get('/pass/{id}', [App\Http\Controllers\PassController::class, 'getPassId'])->name('getPassId');
Route::post('/regpass', [App\Http\Controllers\PassController::class, 'regPass'])->name('regPass');
Route::post('/regpass/timed', [App\Http\Controllers\PassController::class, 'regPassTimed'])->name('regPassTimed');
Route::get('/home/{id}/accept', [App\Http\Controllers\HomeController::class, 'accept'])->name('accept');
Route::get('/home/{id}/deny', [App\Http\Controllers\HomeController::class, 'deny'])->name('deny');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
