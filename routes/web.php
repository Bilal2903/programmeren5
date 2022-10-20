<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\SearchController;
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

//Home controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

//About controller
Route::get('/about', [AboutController::class, 'show']);

//Motor controller
Route::get('/motorPage', [MotorController::class, 'index']);
Route::get('/show', [MotorController::class, 'show']);
Route::resource("motor", App\Http\Controllers\MotorController::class);
Route::post('motor/{motor}/active', [MotorController::class, 'active'])->name('motor.active');

//search and filter controller
Route::resource("search", SearchController::class);

//Clients controller
Route::get('/clients', [ClientsController::class, '__construct'])->name('clients');

//User controller
Route::resource('user', UserController::class);
Route::get('/data', [UserController::class, 'index'])->name('data')->middleware('auth');

//Auth
Auth::routes();
