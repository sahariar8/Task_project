<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getProductsByCategory(Request $request, $slug)
    {
        try {
            $category = Category::where('slug', $slug)->firstOrFail(); //Throw and Exception
        } catch (ModelNotFoundException $e) {
            // If the category is not found, return a JSON error response
            return response()->json(['error' => 'Category not found'], 404);  // 404 HTTP status code
        }
        
        $products = $category->products()->with('reviews');
        
        if ($request->sort == 'best_sell') {
            $products = $products->withCount('orderDetails')->orderBy('order_details_count', 'desc');
        } elseif ($request->sort == 'top_rated') {
            $products = $products->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating', 'desc');
        } elseif ($request->sort == 'price_high_to_low') {
            $products = $products->orderBy('price', 'desc');
        } elseif ($request->sort == 'price_low_to_high') {
            $products = $products->orderBy('price', 'asc');
        }
        
        return response()->json($products->get());
    }
}