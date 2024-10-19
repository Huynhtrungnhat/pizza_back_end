<?php

namespace App\Http\Controllers;

use App\Models\khach_hang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function themKhachhang(Request $request){
        $params = $request->all();

        $result = khach_hang::create($params);

        if(!$result)
        {
            return response()->json([
                'message' => 'Them khach hang that bai'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'message' => 'Them khach hang thanh cong',
            'data' => $result,
        ], 201);
    }

    public function layKhachhang(){

        $result = khach_hang::all();

        if(!$result)
        {
            return response()->json([
                'message' => 'Khong co san pham'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'data' => $result,
        ], 201);
    }
}
