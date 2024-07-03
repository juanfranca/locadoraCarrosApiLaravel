<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function(){
    Route::apiResource('brand', BrandController::class);
    Route::apiResource('car', CarController::class);
    Route::apiResource('rent', RentController::class);
});
