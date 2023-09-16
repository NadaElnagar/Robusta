<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);

});

Route::group(['middleware' => 'auth:api', 'prefix' => 'auth'], function ($router) {
Route::post('book_seat',[\App\Http\Controllers\SeatController::class,'bookSeat']);
Route::get('get_available_seats',[\App\Http\Controllers\SeatController::class,'getAvailableSeats']);

});
