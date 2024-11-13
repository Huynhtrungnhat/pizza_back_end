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
<<<<<<< HEAD
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

=======
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
    public function show(hoa_don $hoa_don)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hoa_don $hoa_don)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hoa_don $hoa_don)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hoa_don $hoa_don)
    {
        //
    }
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
}
