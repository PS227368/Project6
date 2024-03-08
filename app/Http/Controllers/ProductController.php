<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        $products = $query->take(5)->get();

        return view('index', compact('products'));
    }
    
    public function show($id)
    {
        // Fetch the product details based on the $id
        $product = Product::find($id);

        // Check if the product exists
        if (!$product) {
            abort(404); // Or handle the error in a way that suits your application
        }

        // Return the view for the single product page with the product data
        return view('single-product', compact('product'));
    }
}
