<?php

<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('api')->group(function(){
    Route::get('/pizza', [PizzaController::class, 'index']);
});

<<<<<<< HEAD
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware(['auth'])->group(function(){
    Route::get('/me', [AuthController::class, 'me']);
    Route::delete('/logout', [AuthController::class, 'logout']);
});
=======
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
