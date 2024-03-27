<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\KuinApiService;
use Illuminate\Support\Facades\Http;    


class apiController extends Controller
{
    protected $kuinApiService;

    public function __construct(KuinApiService $kuinApiService)
{
    $this->kuinApiService = $kuinApiService;
}

public function getProductList()
{
    $token = '33|mYgeYHYJWtc22szlQfnrgXo7gH0LYNb80caVijHv';

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->get('https://kuin.summaict.nl/api/product');

    if ($response->successful()) {
        $products = $response->json();
        return view('index', compact('products'));
    } else {
        echo "Er is een fout opgetreden";
        // Als je dit krijgt is er een fout
    }
}   

public function getProduct($productId)
{
    $token = '33|mYgeYHYJWtc22szlQfnrgXo7gH0LYNb80caVijHv';

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->get("https://kuin.summaict.nl/api/product/{$productId}");

    if ($response->successful()) {
        $product = $response->json();
        return view('single-product', compact('product'));
    } else {
        echo "Er is een fout opgetreden";
        // Als je dit krijgt is er een fout
    }
}

public function searchProduct(Request $request, $search)
{
    $token = '33|mYgeYHYJWtc22szlQfnrgXo7gH0LYNb80caVijHv';

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->get("https://kuin.summaict.nl/api/product/search/{$search}");

    if ($response->successful()) {
        $product = $response->json();

        $query = $request->input('query');
        
        $products = Product::query()
            ->where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->take(5)
            ->get();
        
        return response()->json($products);
    } else {
        echo "Er is een fout opgetreden";
        // Als je dit krijgt is er een fout
    }
}
}
