<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// MyRoute 
Route::get('/category/{slug}/products', [CategoryController::class, 'getProductsByCategory']);