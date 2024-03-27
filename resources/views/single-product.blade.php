<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="singleproduct.css">

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
<div class="start-body">
    <div class="container mx-auto px-4 my-8 ">
        <div class="product-details bg-white rounded-lg shadow-lg p-8 w-10/12 m-auto">
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid h-80">
            <h1 class="text-3xl font-bold my-4">{{ $product['name'] }}</h1>
            <p class="mb-4">{{ $product['description'] }}</p>
            <p class="price">€ {{ $product['price'] }}</p>
            <a href="{{ url('/index') }}" class="btn btn-primary bg-green-600 border-green-600 hover:bg-green-800">Back to Products</a>
            <button class="btn btn-primary bg-blue-600 border-blue-600 hover:bg-blue-800" onclick="addToCart({{ $product['id'] }})">Voeg toe aan winkelwagen</button>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function addToCart(productId) {
        $.ajax({
            url: '/add-to-cart/' + productId,
            type: 'GET',
            success: function(response) {
                alert('Product is toegevoegd aan de winkelwagen.');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Er is een fout opgetreden bij het toevoegen van het product aan de winkelwagen.');
            }
        });
    }
</script>

</body>
</html>
