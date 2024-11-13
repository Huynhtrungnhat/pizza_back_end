<?php

namespace App\Http\Controllers;

use App\Models\chi_tiet_hoa_don;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChiTietHoaDonController extends Controller
{
<<<<<<< HEAD
    public function luuChiTietHoaDon(Request $request)
    {

        $CThoadon = $request->all();

        $result = chi_tiet_hoa_don::create($CThoadon);

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
    public function layCthoadon(Request $request){

        $result = chi_tiet_hoa_don::all();

        if(!$result)
        {
            return response()->json([
                'message' => 'Khong tim thay thong tin'
            ], 500);
        }
        return response()->json([
            'user' => $result,
        ], 201);
=======
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
    public function show(chi_tiet_hoa_don $chi_tiet_hoa_don)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chi_tiet_hoa_don $chi_tiet_hoa_don)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chi_tiet_hoa_don $chi_tiet_hoa_don)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chi_tiet_hoa_don $chi_tiet_hoa_don)
    {
        //
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    }
}
