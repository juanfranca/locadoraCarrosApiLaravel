<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return Brand::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>   'required|unique:brand'
        ]);

        $brand = Brand::create($request->all());

        return response()->json(['status' => 200, 'message' => 'Brand created!', 'data' => $brand]);
    }

    public function show(Brand $brand)
    {
        return $brand;
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'nome' => 'required|unique:brand,name,' . $brand->id,
        ]);

        $brand->update($request->all());

        return response()->json(['status' => 200, 'message' => 'Brand updated!', 'data' => $brand]);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return response()->json(['status' => 200, 'message' => 'Brand deleted!', 'data' => '']);
    }
}
