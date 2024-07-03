<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' =>   'required',
            'model_car' => 'required|string',
            'plate' => 'required|unique:cars'
        ]);

        $car = Car::create($request->all());

        return response()->json(['status' => 200, 'message' => 'Car created!', 'data' => $car]);
    }

    public function show(Car $car)
    {
        return $car;
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'nome' => 'required|unique:cars,name,' . $car->id,
        ]);

        $car->update($request->all());

        return response()->json(['status' => 200, 'message' => 'Car updated!', 'data' => $car]);
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return response()->json(['status' => 204, 'message' => 'Car deleted!', 'data' => '']);
    }
}
