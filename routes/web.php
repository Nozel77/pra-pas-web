<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PopularController;
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

Route::get('/', function () {
    return view('layout.home');
});
Route::get('favorite', [FavoriteController::class, 'index']);
Route::get('favorite/detail{favorite}', [FavoriteController::class, 'detailFavorite']);

Route::get('popular', [PopularController::class, 'index']);
Route::get('popular/detail{popular}', [PopularController::class, 'detailPopular']);
