<?php

use App\Http\Controllers\KhachHangController;
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
 Route::prefix('khachhang')->group(function(){
    Route::get('/', [KhachHangController::class, 'layKhachhang']);
    Route::post('/', [KhachHangController::class, 'themKhachhang']);
 });

 use Illuminate\Support\Facades\Storage;
 use Illuminate\Support\Facades\Response;

 Route::get('storage/images/{filename}', function ($filename) {
     $path = Storage::disk('public')->path('images/' . $filename);

    //  dump($path);
     if (!file_exists($path)) {
         return response()->json(['message' => 'Image not found'], 404);
     }

     $file = file_get_contents($path);
     $type = mime_content_type($path);

     return Response::make($file, 200, [
         "Content-Type" => $type,
         "Access-Control-Allow-Origin" => "*",
         "Access-Control-Allow-Methods" => "GET, POST, PUT, DELETE, OPTIONS",
         "Access-Control-Allow-Headers" => "Content-Type, Authorization, X-Requested-With, X-CSRF-TOKEN"
     ]);
 });
