<?php

namespace App\Http\Controllers;

use App\Models\hoa_don;
use App\Http\Controllers\Controller;
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
    public function layhoadon(Request $request){

        $result = hoa_don::all();

        if(!$result)
        {
            return response()->json([
                'message' => 'Khong tim thay thong tin'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'user' => $result,
        ], 201);
    }

}
