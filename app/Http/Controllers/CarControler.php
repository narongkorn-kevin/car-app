<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\ElseIf_;

class CarControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->name;
        $color = $request->color;
        $type = $request->type;
        //เช็คช่องว่าง//
        if (!isset($name)) {
            return response()->json([
                'message' => 'กรุณากรอกข้อมูล',
                'data' => $name,
            ], 400);
        } elseif (!isset($color)) {
            return response()->json([
                'message' => 'กรุณากรอกข้อมูล',
                'data' => $color,
            ], 400);
        } elseif (!isset($type)) {
            return response()->json([
                'message' => 'กรุณากรอกข้อมูล',
                'data' => $type,
            ], 400);
        }
        //เช็คช่องว่าง//

        //เช็คซ้ำ//

        // $car_name = car::where('name', $name)->first();
        // $car_color = car::where('color', $color)->first();
        // $car_type = car::where('type', $type)->first();

        // if (empty($car_name) && empty($car_color) && empty($car_type)) {
        //     $car = new Car();
        //     $car->name = $name;
        //     $car->color = $color;
        //     $car->type = $type;
        //     $car->save();

        //     return response()->json([
        //         'code' => strval(200),
        //         'status' => true,
        //         'message' => 'เรียกดู',
        //         'data' => $car,
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'message' => 'มีข้อมูลนี้ในระบบแล้ว',
        //     ], 400);
        // }

        //เช็คซ้ำ//

        // //เพิ่มข้อมูล//
        $car = new Car();
        $car->name = $name;
        $car->color = $color;
        $car->type = $type;
        $car->save();

        return response()->json([
                'code' => strval(200),
                'status' => true,
                'message' => 'เรียกดู',
                'data' => $car,
            ], 200);
        // //เพิ่มข้อมูล//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
