<?php

namespace App\Http\Controllers;

use App\Models\chi_tiet_hoa_don;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChiTietHoaDonController extends Controller
{
    public function luuChiTietHoaDon(Request $request)
    {

        $CThoadon = $request->all();

        $result = chi_tiet_hoa_don::create($CThoadon);

        if(!$result){
            return response()->json([
                'message' => 'Luu hoa don that bai.'
            ], 500);
        }

        return response()->json([
            'message' => 'Luu hoa don thanh cong.',
            'hoadon' => $result,
        ], 201);
    }
    public function layCthoadon(Request $request){

        $result = chi_tiet_hoa_don::all();

        if(!$result)
        {
            return response()->json([
                'message' => 'Khong tim thay thong tin'
            ], 500);
        }
        return response()->json([
            'user' => $result,
        ], 201);
    }
}
