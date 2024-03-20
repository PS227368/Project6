<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> -->
    <link rel="stylesheet" href="index.css">

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
            <a class="btn btn-contact my-2 my-sm-0" href="/store">Winkelwagen</a>
        </form>
    </div>
</nav>

    <div class="container mx-auto px-4 my-8 ">
        <div class="product-details bg-white rounded-lg shadow-lg p-8 w-10/12 m-auto">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid h-80">
            <h1 class="text-3xl font-bold my-4">{{ $product->name }}</h1>
            <p class="mb-4">{{ $product->description }}</p>
            <p class="price">€  {{ $product->price }}</p>
            <p class="Aantal">Beschikbaar aantal: {{ $product->quantity }}</p>

            <a href="{{ url('/index') }}" class="btn btn-primary bg-green-600 border-green-600 hover:bg-green-800 hover:bg-green-800">Back to Products</a>
        </div>
    </div>

</body>
</html>
