<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotorController;
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

Route::get('/motorPage', [MotorController::class, 'show']);

Route::get('/data', [DatabaseController::class, '__construct'])->name('data');

Route::resource("motor", App\Http\Controllers\MotorController::class);

Route::get('/adminLogin', [AdminLoginController::class, 'index'])->name('adminLogin');

Auth::routes(['verify' => true]);
