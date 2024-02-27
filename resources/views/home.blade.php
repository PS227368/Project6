<!-- resources/views/product.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Product Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="index.css">

<body>

<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
    <a class="navbar-brand p-0" href="/understructure">
        <img src="{{ asset('LogoNoText.PNG') }}" alt="Logo" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--Zorgt voor de wit space-->
        </ul>
    <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-contact my-2 my-sm-0" href="/contact">Contactpagina</a>
        </form>
    </div>
</nav>

<h1 class="page-heading">Welkom op onze productpagina</h1>

<!-- Slider van producten -->
<div class="product-slider">
    @foreach($products as $product)
        <div class="product-item">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <p class="price">{{ $product->price }}</p>
            <!-- Voeg hier andere productinformatie toe indien nodig -->
        </div>
    @endforeach
</div>

<!-- Filter Form -->
<form class="filter-form" action="{{ url('/index') }}" method="GET">
    <label for="name">Filter by Name:</label>
    <input type="text" name="name" id="name" value="{{ request('name') }}">
    <button type="submit">Filter</button>
</form>

<!-- Product Table -->
<!-- <table class="product-table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table> -->

<!-- JavaScript voor Slick Slider -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.product-slider').slick({
            slidesToShow: 3, // Pas het aantal getoonde slides aan
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000, // Pas de snelheid van de automatische weergave aan
            arrows: true,
            dots: true
        });
    });
</script>

</body>
</html>