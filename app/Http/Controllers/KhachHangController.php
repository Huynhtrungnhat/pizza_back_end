<?php

namespace App\Http\Controllers;

use App\Models\khach_hang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(khach_hang $khach_hang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(khach_hang $khach_hang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, khach_hang $khach_hang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(khach_hang $khach_hang)
    {
        //
=======
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
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    }
}
