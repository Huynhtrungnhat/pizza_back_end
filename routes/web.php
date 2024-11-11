<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('api')->group(function(){
    Route::get('/pizza', [PizzaController::class, 'index']);
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware(['auth'])->group(function(){
    Route::get('/me', [AuthController::class, 'me']);
    Route::delete('/logout', [AuthController::class, 'logout']);
});
