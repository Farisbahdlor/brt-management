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

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BRTController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('brts', [BRTController::class, 'index']);
    Route::post('brts', [BRTController::class, 'store']);
    Route::get('brts/{id}', [BRTController::class, 'show']);
    Route::put('brts/{id}', [BRTController::class, 'update']);
    Route::delete('brts/{id}', [BRTController::class, 'destroy']);
});

