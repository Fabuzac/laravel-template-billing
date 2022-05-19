<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/materials', [MaterialsController::class, 'index'])->name('materials.index');
Route::get('/materials/wood/{wood}', [WoodController::class, 'show'])->name('wood.show');
Route::get('/materials/steel/{steel}', [SteelController::class, 'show'])->name('steel.show');