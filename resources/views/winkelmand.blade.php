<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelmand</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
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
                        <input class="text-sm text-gray-500 quantity-input" id="quantity_{{ $item->id }}" type="number" min="1" name="quantity" value="{{ $item->quantity }}" min="1" data-id="{{ $item->id }}" data-price="{{ $item->product->price }}" onchange="updateQuantity(this)">
                        <p id="totalPrice_{{ $item->id }}">Totaal: €{{ $item->product->price * $item->quantity }}</p>
                        <button class="btn btn-danger" onclick="removeFromCart({{ $item->id }})">Verwijder</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="flex justify-between items-center mt-8">
        <div class="text-lg font-semibold" id="totalPrice">Totaal: €{{ $totalPrice }}</div>
    </div>
    <div class="mt-4">
        <a href="{{ url('/checkout') }}" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-800">Afrekenen</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateQuantity(input) {
        var itemId = input.getAttribute('data-id');
        var newQuantity = input.value;
        
        $.ajax({
            url: '/update-quantity/' + itemId,
            type: 'PUT',
            data: { 
                quantity: newQuantity,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Voer hier eventuele andere acties uit die je wilt uitvoeren na het bijwerken van de hoeveelheid
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Er is een fout opgetreden bij het bijwerken van de hoeveelheid.');
            }
        });
    }
</script>

<script>
    // Functie om de totale prijs bij te werken wanneer de hoeveelheid verandert
    function updateTotalPrice(itemId) {
        var quantityInput = document.getElementById('quantity_' + itemId);
        var pricePerItem = parseFloat(quantityInput.getAttribute('data-price'));
        var newQuantity = parseInt(quantityInput.value);
        var totalPriceElement = document.getElementById('totalPrice_' + itemId);

        // Bereken de nieuwe totale prijs
        var newTotalPrice = pricePerItem * newQuantity;

        // Werk de totale prijs bij op de pagina
        totalPriceElement.innerText = 'Totaal: €' + newTotalPrice.toFixed(2);
    }

    // Voeg een event listener toe aan alle hoeveelheidsinvoeren
    var quantityInputs = document.querySelectorAll('.quantity-input');
    quantityInputs.forEach(function(input) {
        input.addEventListener('change', function() {
            var itemId = this.getAttribute('data-id');
            updateTotalPrice(itemId);
        });
    });
</script>

<script>
    function removeFromCart(itemId) {
        $.ajax({
            url: '/remove-from-cart/' + itemId,
            type: 'DELETE',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Voer hier eventuele andere acties uit die je wilt uitvoeren na het verwijderen van het item
                // Bijvoorbeeld het bijwerken van de winkelmandweergave
                location.reload(); // Herlaad de pagina om de bijgewerkte winkelmand weer te geven
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Er is een fout opgetreden bij het verwijderen van het item uit de winkelmand.');
            }
        });
    }
</script>


</body>
</html>
