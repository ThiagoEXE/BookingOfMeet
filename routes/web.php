<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Database\Schema\IndexDefinition;
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


Route::get('/', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'create']);

//Route::post('/register', [UserController::class, 'register']);
//Route::post('/register', [UserController::class, 'register']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);







Route::get('/booking', [BookingController::class, 'index']);
Route::get('/create/booking', [BookingController::class, 'create']);
Route::post('/create/booking', [BookingController::class, 'store']);

Route::get('/room', [RoomController::class, 'index']);
Route::post('/room', [RoomController::class, 'store']);

Route::group(['midlleware' => ['auth:sanctum']], function(){
    Route::post('/logout', [AuthController::class, 'logout']);
});


