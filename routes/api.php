<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InteractionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class,'login'])->name('login')->middleware('guest');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
    Route::post('send-message', [InteractionController::class, 'sendMessage'])->name('message');
    Route::post('greet/{user}', [InteractionController::class, 'greet'])->name('greet');
});
