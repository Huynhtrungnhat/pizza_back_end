<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function themNguoiDung(Request $request){
        $params = $request->all();
        $params['password'] = Hash::make($params['password']);

        $result = User::create($params);

        if(!$result)
        {
            return response()->json([
                'message' => 'Them nguoi dung that bai'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'message' => 'Them nguoi dung thanh cong',
            'user' => $result,
        ], 201);
    }

    public function layNguoiDung(Request $request){

        $result = User::all();

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
    public function layNguoiDungTheoId(Request $request, $id)
{
    $result = User::find($id);

    if (!$result) {
        return response()->json([
            'message' => 'Khong tim thay thong tin'
        ], 404);
    }

    return response()->json([
        'user' => $result,
    ], 201);
}



}
