<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use App\KuinApiService;

class ProductController extends Controller
{
    public function index(Request $request)
{


    $token = '33|mYgeYHYJWtc22szlQfnrgXo7gH0LYNb80caVijHv';

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->get('https://kuin.summaict.nl/api/product');
    
    if ($response->successful()) {
        $data = $response->json();
    } else {
    }
    
}
    
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404); 
        }
        return view('single-product', compact('product'));
    }

    public function home(Request $request)
    {
        $query = Product::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        $products = $query->take(5)->get();

        return view('homepagina', compact('products'));
    }
}
