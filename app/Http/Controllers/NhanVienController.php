<?php

namespace App\Http\Controllers;

use App\Models\nhan_vien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function themnhanvien(Request $request)
    {

        $nhanvien = $request->all();

        $result = nhan_vien::create($nhanvien);

        if(!$result){
            return response()->json([
                'message' => 'Thêm nhân viên that bai.'
            ], 500);
        }

        return response()->json([
            'message' => 'thêm nhân viên thanh cong.',
            'data' => $result,
        ], 201);
    }
    public function laynhanvien(Request $request){

        $result = nhan_vien::all();

        if(!$result)
        {
            return response()->json([
                'message' => 'Khong tim thay thong tin'
            ], 500);
        }
        return response()->json([
            'nhanvien' => $result,
        ], 201);
    }
    public function laynhanvienTheoId(Request $request, $id)
{
    $result = nhan_vien::where('ma_nhan_vien', $id)->first();

    if (!$result) {
        return response()->json([
            'message' => 'Khong tim thay thong tin'
        ], 404);
    }

    return response()->json([
        'nhanvien' => $result,
    ], 201);
}
public function capnhatnhanvien(Request $request, $id)
{
    $params = $request->all();

    $khachhang = nhan_vien::where('ma_nhan_vien', $id)->first();

    if (!$khachhang) {
        return response()->json([
            'message' => 'nhân viên không tồn tại',
        ], 404);
    }

    $khachhang->update($params);

    return response()->json([
        'message' => 'Cập nhật khách hàng thành công',
        'khachhang' => $khachhang,
    ], 200);
}

}
