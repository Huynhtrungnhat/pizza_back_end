<?php

use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ToppingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('user')->group(function(){
   Route::get('/', [UserController::class, 'themNguoiDung']);
    Route::get('/{id}', [UserController::class, 'layNguoiDung']);
});
Route::prefix('sanpham')->group(function(){
    Route::get('/', [SanPhamController::class, 'laySanpham']);
    Route::post('/', [SanPhamController::class, 'themSanpham']);
 });

