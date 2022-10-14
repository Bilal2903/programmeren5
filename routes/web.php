<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'show']);

Route::get('/motorPage', [MotorController::class, 'index']);
Route::get('/show', [MotorController::class, 'show']);
Route::get('/data', [UserController::class, 'index'])->name('data')->middleware('auth');
Route::resource("motor", App\Http\Controllers\MotorController::class);

Route::get('/clients', [ClientsController::class, '__construct'])->name('clients');

Route::resource('user', UserController::class);

Auth::routes();
