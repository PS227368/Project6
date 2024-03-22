<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelmand</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Winkelmand</h1>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <ul class="divide-y divide-gray-200">
                <!-- Voor elk product in de winkelmand -->
                @foreach($cartItems as $item)
                <li class="flex items-center py-6 px-4 sm:px-6">
                    <img class="h-20 w-20 rounded-full" src="{{ $item->product->image }}" alt="{{ $item->product->name }}">
                    <div class="ml-4">
                        <p class="text-lg font-medium text-gray-900">{{ $item->product->name }}</p>
                        <p class="text-sm text-gray-500">{{ $item->product->description }}</p>
                        <p class="text-sm text-gray-500">Prijs: €{{ $item->product->price }}</p>
                        <p class="text-sm text-gray-500">Aantal: {{ $item->quantity }}</p>
                    </div>
                </li>
                @endforeach
                <!-- Einde van producten in de winkelmand -->
            </ul>
        </div>
        <div class="mt-8">
            <p class="text-lg font-semibold">Totaal: €{{ $totalPrice }}</p>
            <br>
            <a href="{{ url('/checkout') }}" class="mt-4 px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-800">Afrekenen</a>
        </div>
    </div>
</body>
</html>
