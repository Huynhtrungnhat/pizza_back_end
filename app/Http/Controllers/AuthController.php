<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Dang nhap
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password'  => 'required'
        ]);


    }

    // Dang ky
    public function register(){

    }

    // Kiem tra token dang nhap
    public function author(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            unset($user->password);
            return response()->json([
                'user'=> $user,
            ], 200);
        }

        return response()->json([
            'message' => 'UnAuthtication',
        ], 401);
    }

    // Lay thong tin nguoi dang dang nhap
    public function me(Request $request){
        return response()->json([
            'user'=> $request->user()
        ]);
    }
}
