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
    public function CapnhatthongtinUser(Request $request, $id)
    {
        // Lấy tất cả các tham số từ request
        $params = $request->all();
        // Kiểm tra xem sản phẩm có tồn tại trong cơ sở dữ liệu không
        $User = User::find($id);

        if (!$User) {
            return response()->json([
                'message' => 'San pham không tồn tại',
            ], 404);
        }

        // Cập nhật các thông tin của sản phẩm
        $User->update($params);

        return response()->json([
            'message' => 'Cập nhật sản phẩm thành công',
            'data' => $User,
        ], 200);
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
