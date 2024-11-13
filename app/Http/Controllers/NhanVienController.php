<?php

namespace App\Http\Controllers;

use App\Models\nhan_vien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
<<<<<<< HEAD
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
    public function show(nhan_vien $nhan_vien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nhan_vien $nhan_vien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nhan_vien $nhan_vien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nhan_vien $nhan_vien)
    {
        //
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    }
}
