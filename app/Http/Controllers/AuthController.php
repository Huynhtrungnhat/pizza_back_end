<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Dang nhap
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid email or password'], 422);
        }

        $token = $user->createToken('main')->plainTextToken;

        return response()->json([
            'id' => $user->id,
            'user' => $user,
            'token' => $token,
            'statusCode' => 202
        ], 202);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json(['success' => true]);
    }

    // Dang ky
    public function register(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|min:8',
                'name' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $datetime = date("h:i:sa");

            // Create the user with request data

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => $datetime,
                'updated_at' => $datetime
            ]);

            $token = $user->createToken('main')->plainTextToken;

            return response()->json([
                'data' => [
                    'id' => $user->id,
                    'user' => $user,
                    'token' => $token
                ]
            ], 201);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Something reallly wrong when you created new user'
            ], 500);
        }
        // $data = $request->validated();

        // /** @var \App\Models\User $user */
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password'])
        // ]);
        // $token = $user->createToken('main')->plainTextToken;

        // return response([
        //     'user' => $user,
        //     'token' => $token
        // ]);
    }

    // Kiem tra token dang nhap
    public function author(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            unset($user->password);
            return response()->json([
                'user' => $user,
            ], 200);
        }

        return response()->json([
            'message' => 'UnAuthtication',
        ], 401);
    }

    // Lay thong tin nguoi dang dang nhap
    public function me(Request $request)
    {
        return response()->json([
            'user' => $request->user()
        ]);
    }
}
