<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WoodController;
use App\Http\Controllers\SteelController;

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
Auth::routes();

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/profile/{user}', [UserController::class, 'show'])->name('profile');

Route::get('/wood', [WoodController::class, 'index'])->name('wood.index');
Route::get('/wood/{name}', [WoodController::class, 'show'])->name('wood.show');

Route::get('/steel', [SteelController::class, 'index'])->name('steel.index');
Route::get('/steel/{name}', [SteelController::class, 'show'])->name('steel.show');