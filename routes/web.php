<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/getshops/{region}', [ShopController::class, 'getshops']);

Route::middleware(['auth'])->group(function () {

    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::get('/profile/{user}', [UserController::class, 'profile'])->name('profile');
});
