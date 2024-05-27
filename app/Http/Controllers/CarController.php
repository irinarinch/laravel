<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Resources\CarResource;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::paginate(25);
        CarResource::collection($cars);
        return response()->json([
            'data' => $cars->all(),
            'current_page' => $cars->currentPage(),
            'last_page' => $cars->lastPage(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = Car::create($request->all());
        return response()->json($car);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::where('id', $id)->get(); 
        return response()->json($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::find($id);
        $car->update($request->all());
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Car::destroy($id);
    }
}
