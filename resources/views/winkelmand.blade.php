<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelmand</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
    <a class="navbar-brand p-0" href="/understructure">
        <img src="{{ asset('LogoNoText.PNG') }}" alt="Logo" class="navbar-logo max-h-10 max-w-40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-contact my-2 my-sm-0" href="/understructure">Home</a>
            <a class="btn btn-contact my-2 my-sm-0" href="/contact">Contactpagina</a>
            <a class="btn btn-contact my-2 my-sm-0" href="/winkelmand">Winkelwagen</a>
            <a class="btn btn-contact my-2 my-sm-0" href="/checkout">Checkout</a>
        </form>
    </div>
</nav>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <br>
        <br>
        <h1 class="text-2xl font-bold mb-4">Winkelmand</h1>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <ul class="divide-y divide-gray-200">
                <!-- Voor elk product in de winkelmand -->
                @foreach($cartItems as $item)
                <li class="flex items-center py-6 px-4 sm:px-6">
                    <img class="h-20 w-20 rounded-full" src="{{ $item->product->image }}" alt="{{ $item->product->name }}">
                    <div class="ml-4">
                        <p class="text-lg font-medium text-gray-900">{{ $item->product->name }}</p>
                        <p class="text-sm text-gray-500">Prijs per stuk: €{{ $item->product->price }}</p>
                        <form class="quantity-form" data-id="{{ $item->id }}" onsubmit="return false;">
                            <input class="text-sm text-gray-500 quantity-input" id="quantity_{{ $item->id }}" type="number" name="quantity" value="{{ $item->quantity }}" min="1" data-id="{{ $item->id }}" data-price="{{ $item->product->price }}" onchange="updateQuantity(this)">
                            <p id="totalPrice_{{ $item->id }}">Totaal: €{{ $item->product->price * $item->quantity }}</p>
                        </form>
                    </div>
                </li>
                @endforeach
                <!-- Einde van producten in de winkelmand -->
            </ul>
        </div>
        <div class="flex justify-between items-center mt-8">
            <div class="text-lg font-semibold" id="totalPrice">Totaal: €{{ $totalPrice }}</div>
        </div>
        <div class="mt-4">
            <a href="{{ url('/checkout') }}" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-800">Afrekenen</a>
        </div>
    </div>

    <script>
        function updateQuantity(input) {
            var itemId = input.getAttribute('data-id');
            var newQuantity = input.value;

            // Update the total price for this item
            var pricePerItem = parseFloat(input.getAttribute('data-price'));
            var totalPriceElement = document.getElementById('totalPrice_' + itemId);
            var newTotalPrice = pricePerItem * newQuantity;
            totalPriceElement.innerText = 'Totaal: €' + newTotalPrice.toFixed(2);

            // Update the total price for all items
            updateTotalPrice();
        }

        function updateTotalPrice() {
            var totalPrice = 0;

            // Loop through all items and sum up the total price
            var totalPrices = document.querySelectorAll('[id^="totalPrice_"]');
            totalPrices.forEach(function(priceElement) {
                totalPrice += parseFloat(priceElement.innerText.replace('Totaal: €', ''));
            });

            // Update the total price element on the page
            var totalPriceElement = document.getElementById('totalPrice');
            totalPriceElement.innerText = 'Totaal: €' + totalPrice.toFixed(2);
        }
    </script>
</body>
</html>
