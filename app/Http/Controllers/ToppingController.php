<?php

namespace App\Http\Controllers;

use App\Models\topping;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function show(topping $topping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(topping $topping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, topping $topping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(topping $topping)
    {
        //
    }
    public function themTopping(Request $request){
        $params = $request->all();

        $result = topping::create($params);

        if(!$result)
        {
            return response()->json([
                'message' => 'Them topping dung that bai'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'message' => 'Them nguoi dung thanh cong',
            'user' => $result,
        ], 201);
    }

    public function layNguoiDung(Request $request, $id){

        $result = topping::find($id);

        if(!$result)
        {
            return response()->json([
                'message' => 'Khong tim topping'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'topping' => $result,
        ], 201);
    }
}
