<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KuinApiService;


class apiController extends Controller
{
    protected $kuinApiService;

    public function __construct(KuinApiService $kuinApiService)
    {
        $this->kuinApiService = $kuinApiService;
    }

    public function getProduct($productId)
    {
        $product = $this->kuinApiService->getProduct($productId);
        return view('product', compact('product'));
    }

    // Implementeer soortgelijke methoden voor het ophalen van orders, order-items, etc.
}
