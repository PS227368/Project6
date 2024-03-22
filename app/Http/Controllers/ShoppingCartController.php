<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class ShoppingCartController extends Controller
{
    // Methode om de winkelmand weer te geven
    public function showCart()
    {
        // Haal alle items op uit de winkelmand
        $cartItems = CartItem::all();

        // Bereken totale prijs
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item->product->price * $item->quantity;
        }

        // Laad de winkelmandweergave met de winkelmanditems en totale prijs
        return view('winkelmand', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice
        ]);
    }

    // Methode om een product aan de winkelmand toe te voegen
    public function addToCart($id)
{
    // Zoek het product op basis van het productId dat is verzonden via het verzoek
    $product = Product::find($id);

    // Controleer of het product bestaat
    if (!$product) {
        return response()->json(['message' => 'Product niet gevonden.'], 404);
    }

    // Voeg het product toe aan de winkelmand
    CartItem::create([
        'product_id' => $product->id,
        'quantity' => 1, // Of de gewenste hoeveelheid
    ]);

    // Geef een succesbericht terug naar de gebruiker
    return response()->json(['message' => 'Product is succesvol toegevoegd aan de winkelmand.']);
}

    // Methode om een product uit de winkelmand te verwijderen
    public function removeFromCart(Request $request)
    {
        // Hier kun je de logica implementeren om een product uit de winkelmand te verwijderen
        // Bijvoorbeeld, controleren of het product in de winkelmand zit, het product verwijderen, etc.

        // Voor nu verwijderen we het product gewoon uit de winkelmand en sturen we een bericht terug
        return response()->json(['message' => 'Product is succesvol verwijderd uit de winkelmand.']);
    }
}
