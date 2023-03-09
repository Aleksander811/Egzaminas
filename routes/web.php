<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;

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

// skelbimai
Route::get('/', [AdController::class, 'index']);
Route::get('/add-ad', [AdController::class, 'addAd']);
Route::post('/storeAd', [AdController::class, 'store']);
Route::get('/ad/{ad}', [AdController::class, 'showAd']);
Route::get('/ad/edit/{ad}', [AdController::class, 'editAd']);
Route::post('/update/{ad}', [AdController::class, 'storeUpdate']);
Route::get('/ad/delete/{ad}', [AdController::class, 'deleteAd']);

// lankytojai
