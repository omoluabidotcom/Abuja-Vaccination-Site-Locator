<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedsController;
use App\Http\Controllers\ExtsController;

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

Route::resource('/main', MedsController::class);

Route::get('/submit', [App\Http\Controllers\ExtsController::class, 'index']);

Route::post('/submit', [App\Http\Controllers\ExtsController::class, 'store']);

// Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

