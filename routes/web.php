<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\LegumeController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/legume', [LegumeController::class, 'index'])->name('legume');
Route::get('/fruit', [FruitController::class, 'index'])->name('fruit');

Route::get('/fruit-show/{id}', [FruitController::class, 'show']);
Route::get('/legume-show/{id}', [FruitController::class, 'show']);

