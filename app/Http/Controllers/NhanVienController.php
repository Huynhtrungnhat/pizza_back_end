<?php

namespace App\Http\Controllers;

use App\Models\nhan_vien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function themNhanVien(Request $request){
        $params = $request->all();
        $result = nhan_vien::create($params);

        if(!$result)
        {
            return response()->json([
                'message' => 'Them nhan vien that bai'
            ], 500);
        }
        return response()->json([
            'message' => 'Them nhan vien thanh cong',
            'user' => $result,
        ], 201);
    }
}
