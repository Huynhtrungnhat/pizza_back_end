<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function themSanpham(Request $request){
        $params = $request->all();

        $result = SanPham::create($params);

        if(!$result)
        {
            return response()->json([
                'message' => 'Them san pham that bai'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'message' => 'Them san pham thanh cong',
            'data' => $result,
        ], 201);
    }

    public function laySanpham(){

        $result = SanPham::all();

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
