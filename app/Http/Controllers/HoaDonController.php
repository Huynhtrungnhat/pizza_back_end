<?php

namespace App\Http\Controllers;

use App\Models\hoa_don;
use App\Http\Controllers\Controller;
use App\Models\khach_hang;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function luuHoaDon(Request $request)
    {

        $hoadon = $request->all();

        $result = hoa_don::create($hoadon);

        if (!$result) {
            return response()->json([
                'message' => 'Luu hoa don that bai.'
            ], 500);
        }

        return response()->json([
            'message' => 'Luu hoa don thanh cong.',
            'hoa_don' => $result,
        ], 201);
    }
    public function layhoadon(Request $request)
    {

        $result = hoa_don::all();

        if (!$result) {
            return response()->json([
                'message' => 'Khong tim thay thong tin'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'hoa_don' => $result,
        ], 201);
    }

    public function Capnhathoadon(Request $request, $id)
    {
        $params = $request->all();

        $trangThai = $request->input('trang_thai');

        $hoadon = hoa_don::where('ma_hoa_don', $id)->first();

        $hoadon->trang_thai = $trangThai;

        if (!$hoadon) {
            return response()->json([
                'message' => 'Khach hang không tồn tại',
            ], 404);
        }

        $hoadon->update($params);

        return response()->json([
            'message' => 'Cập nhật khách hàng thành công',
            'khachhang' => $hoadon,
        ], 200);
    }

    public function updateHoaDonmanhanvien(Request $request, $id)
    {
        $manhanvien = $request->input('ma_nhan_vien');
        $maHoaDon = $request->input('ma_hoa_don');

        if (is_null($manhanvien)) {
            return response()->json([
                'message' => 'ma nhan vien không được để trống.'
            ], 400);
        }

        if ($maHoaDon) {
            $hoaDon = hoa_don::where('ma_hoa_don', $maHoaDon)->first();
        } else {
            $hoaDon = hoa_don::find($id);
        }

        if (!$hoaDon) {
            return response()->json([
                'message' => 'Không tìm thấy hóa đơn.'
            ], 404);
        }

        $hoaDon->ma_nhan_vien = $manhanvien;

        $hoaDon->save();

        return response()->json([
            'message' => 'Cập nhật ma nhan viên hóa đơn thành công.',
            'hoa_don' => $hoaDon
        ], 200);
    }
    public function laykhtheohoadon(Request $request, $id)
    {
        // Log số điện thoại để kiểm tra
        $result = hoa_don::where('ma_hoa_don', $id)->first();

        if (!$result) {
            return response()->json([
                'message' => 'Không tìm thấy thông tin khách hàng.'
            ], 404);
        }

        return response()->json([
            'hoa_don' => $result,
        ], 201);
    }

    public function laykhachhangTheohoadon(Request $request, $id)
    {
        // Tìm hóa đơn theo ma_hoa_don
        $hoaDon = hoa_don::where('ma_hoa_don', $id)->first();

        if (!$hoaDon) {
            return response()->json([
                'message' => 'Không tìm thấy thông tin hóa đơn.'
            ], 404);
        }

        // Tìm khách hàng theo ma_khach_hang từ hóa đơn
        $khachHang = khach_hang::where('ma_khach_hang', $hoaDon->ma_khach_hang)->first();

        if (!$khachHang) {
            return response()->json([
                'message' => 'Không tìm thấy thông tin khách hàng.'
            ], 404);
        }

        // Trả về thông tin khách hàng cùng với hóa đơn
        return response()->json([
            'hoa_don' => $hoaDon,
            'khachhang' => $khachHang,
        ], 200);
    }

    public function layDanhSachHoaDonChoKhachHang(Request $request, $maKhachHang){
        try{
            $query = hoa_don::query();

            $query->where('ma_khach_hang', $maKhachHang);

            $data = $query->get()->toArray();

            return response()->json([
                "data" => $data,
                "ma_khach_hang" => $maKhachHang
            ], 200);
        }
        catch(\Exception $ex)
        {
            return response()->json([
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
