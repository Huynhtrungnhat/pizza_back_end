<?php

namespace App\Http\Controllers;

use App\Models\khuyenmai;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekhuyenmaiRequest;
use App\Http\Requests\UpdatekhuyenmaiRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

// use Illuminate\Http\Client\Request;

class KhuyenmaiController extends Controller
{

    public function layDanhSachHangSo()
    {
        $doiTuongApDung = khuyenmai::danhSachDoiTuongApDung();
        $loaiGiaTri = khuyenmai::danhSachLoaiGiaTri();
        return response()->json([
            'doi_tuong_ap_dung' => $doiTuongApDung,
            'loai_gia_tri' => $loaiGiaTri
        ], 200);
    }
    public function themKhuyenmai(Request $request)
    {
        $params = $request->all();

        $result = khuyenmai::create($params);

        if (!$result) {
            return response()->json([
                'message' => 'Them khuyến mãi that bai'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'message' => 'Them Khuyến mãi  thanh cong',
            'data' => $result,
        ], 201);
    }

    public function layDanhSachKhuyenMai(Request $request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh')->timestamp;
        $result = $this->layDanhSachKhuyenMaiDuaVaoHangSoTuongUng(khuyenmai::DOI_TUONG_AP_DUNG_SANPHAM, $now);

        if (!$result) {
            return response()->json([
                'message' => 'Khong co san pham'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'data' => $result,
        ], 201);
    }

    private function layDanhSachKhuyenMaiDuaVaoHangSoTuongUng(string $loaiKhuyenMai, int $ngayHomNay)
    {
        $result = [];
        /**
         * const DOI_TUONG_AP_DUNG_COMBO = 'COMBO';
        *const DOI_TUONG_AP_DUNG_SANPHAM = 'SANPHAM';
        *const DOI_TUONG_AP_DUNG_HOADON = 'HOADON';
         */
        if($loaiKhuyenMai)
        {
            switch($loaiKhuyenMai)
            {
                case khuyenmai::DOI_TUONG_AP_DUNG_COMBO:
                    $result = khuyenmai::where('doi_tuong_ap_dung', $loaiKhuyenMai)
                                ->whereRaw('? BETWEEN ap_dung_tu_ngay AND ap_dung_den_ngay', $ngayHomNay)->get();
                    break;
                case khuyenmai::DOI_TUONG_AP_DUNG_SANPHAM:
                    $result = khuyenmai::where('doi_tuong_ap_dung', $loaiKhuyenMai)
                                ->whereRaw('? BETWEEN ap_dung_tu_ngay AND ap_dung_den_ngay', $ngayHomNay)->get();
                    break;
                case khuyenmai::DOI_TUONG_AP_DUNG_HOADON:
                    $result = khuyenmai::where('doi_tuong_ap_dung', $loaiKhuyenMai)
                                ->whereRaw('? BETWEEN ap_dung_tu_ngay AND ap_dung_den_ngay', $ngayHomNay)->get();
                    break;
                default:
                    break;
            }
            return $result;
        }
        return $result;

    }

    public function layDanhSachKhuyenMaiChoHoaDon()
    {
        try {
            $khuyenMais = khuyenmai::where('doi_tuong_ap_dung', khuyenmai::DOI_TUONG_AP_DUNG_HOADON)->where('trang_thai', 1)->get();

            return response()->json([
                'data' => $khuyenMais
            ], 200);
        } catch (\Exception $ex) {
            //throw $th;
        }
    }
}
