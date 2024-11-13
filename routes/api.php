<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChiTietHoaDonController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\KhuyenmaiController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\SanPhamComboController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\ToppingController;
use App\Http\Controllers\UserController;
use App\Models\hoa_don;
use App\Models\nhan_vien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('user')->group(function () {
    Route::post('/', [UserController::class, 'themNguoiDung']);
    Route::get('/', [UserController::class, 'layNguoiDung']);
    Route::get('/{id}', [UserController::class, 'layNguoiDungTheoId']);
    
    Route::put('/{id}', [UserController::class, 'CapnhatthongtinUser']);
});
Route::prefix('nhanvien')->group(function () {
    Route::post('/', [NhanVienController::class, 'themNhanVien']);

});
Route::prefix('hoadon')->group(function () {
    Route::post('/', [HoaDonController::class, 'luuHoaDon']);
    Route::get('/', [HoaDonController::class, 'layhoadon']);

});
Route::prefix('CTHoaDon')->group(function () {
    Route::post('/', [ChiTietHoaDonController::class, 'luuChiTietHoaDon']);
    Route::get('/', [ChiTietHoaDonController::class, 'layCthoadon']);

});

Route::prefix('sanpham')->group(function () {
    Route::get('/', [SanPhamController::class, 'laySanpham']);
    Route::post('/', [SanPhamController::class, 'themSanpham']);
    Route::put('/{id}', [SanPhamController::class, 'capNhatSanpham']); //Lậy anh Nhật :)))
    Route::get('/{id}', [SanPhamController::class, 'laySanphamTheoId']);

});

Route::prefix('khachhang')->group(function () {
    Route::get('/', [KhachHangController::class, 'layKhachhang']);
    Route::post('/', [KhachHangController::class, 'themKhachhang']);
});

Route::prefix('khuyen_mai')->group(function () {
    Route::get('/hang-so-cau-hinh', [KhuyenmaiController::class, 'layDanhSachHangSo']);
    // Route::post('/', [KhuyenmaiController::class, 'themKhachhang']);
});



Route::get('storage/images/{filename}', function ($filename) {
    $path = Storage::disk('public')->path('images/' . $filename);

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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware(['auth'])->group(function(){
    Route::get('/me', [AuthController::class, 'me']);
    Route::delete('/logout', [AuthController::class, 'logout']);
});
