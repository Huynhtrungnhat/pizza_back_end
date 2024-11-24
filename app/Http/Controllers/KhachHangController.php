<?php

namespace App\Http\Controllers;

use App\Models\khach_hang;
use App\Http\Controllers\Controller;
use App\Models\hoa_don;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function luukhachhang(Request $request)
    {

        $khachhang = $request->all();

        $result = khach_hang::create($khachhang);

        if(!$result){
            return response()->json([
                'message' => 'Luu khach hang that bai.'
            ], 500);
        }

        return response()->json([
            'message' => 'Luu khach hang thanh cong.',
            'khachhang' => $result,
        ], 201);
    }
    public function layKhcoshd(Request $request, $id)
{
    // Tìm thông tin khách hàng theo ma_khach_hang
    $khachHang = khach_hang::where('ma_khach_hang', $id)->first();

    if (!$khachHang) {
        return response()->json([
            'message' => 'Không tìm thấy thông tin khách hàng.'
        ], 404);
    }

    // Lấy danh sách hóa đơn của khách hàng
    $hoaDons = hoa_don::where('ma_khach_hang', $id)->get();

    if ($hoaDons->isEmpty()) {
        return response()->json([
            'message' => 'Khách hàng chưa có hóa đơn nào.'
        ], 404);
    }

    // Trả về thông tin khách hàng cùng với danh sách hóa đơn
    return response()->json([
        'khachhang' => $khachHang,
        'hoa_dons' => $hoaDons,
    ], 200);
}

    public function laykhachhang(Request $request){

        $result = khach_hang::all();

        if(!$result)
        {
            return response()->json([
                'message' => 'Khong tim thay thong tin'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'khachhang' => $result,
        ], 201);
    }
    public function laykhachhnagTheoId(Request $request, $id)
{
    $result = khach_hang::where('ma_khach_hang', $id)->first();

    if (!$result) {
        return response()->json([
            'message' => 'Khong tim thay thong tin'
        ], 404);
    }

    return response()->json([
        'khachhang' => $result,
    ], 201);
}
public function Capnhatkhachhang(Request $request, $id)
{
    $params = $request->all();

    $khachhang = khach_hang::where('ma_khach_hang', $id)->first();

    if (!$khachhang) {
        return response()->json([
            'message' => 'Khach hang không tồn tại',
        ], 404);
    }

    $khachhang->update($params);

    return response()->json([
        'message' => 'Cập nhật khách hàng thành công',
        'khachhang' => $khachhang,
    ], 200);
}
public function laykhachhangTheoSoDienThoai(Request $request, $id)
{
    // Log số điện thoại để kiểm tra
    $result = khach_hang::where('sdt', $id)->first();

    if (!$result) {
        return response()->json([
            'message' => 'Không tìm thấy thông tin khách hàng.'
        ], 404);
    }

    return response()->json([
        'khachhang' => $result,
    ], 201);
}



}
