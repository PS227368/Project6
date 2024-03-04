<!-- resources/views/product.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Product Page</title>

    <!-- Add Tailwind CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
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
                <!--Zorgt voor de wit space-->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-contact my-2 my-sm-0" href="/understructure">Home</a>
                <a class="btn btn-contact my-2 my-sm-0" href="/contact">Contactpagina</a>
                <a class="btn btn-contact my-2 my-sm-0" href="/store">Winkelwagen</a>
            </form>
        </div>
    </nav>

    <h1 class="text-4xl font-bold text-center mt-12 mb-8">Welkom op onze productpagina</h1>



    <!-- Product Grid -->
    <div class="container mx-auto px-4">
        <!-- Filter Form -->
        <form class="filter-form mt-8 mb-12" action="{{ url('/index') }}" method="GET">
            <label for="name" class="mr-2">Filter by Name:</label>
            <input type="text" name="name" id="name" value="{{ request('name') }}" class="border rounded py-2 px-4">
            <button type="submit" class="btn btn-primary ml-2">Filter</button>
            
        </form>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="product-item bg-white rounded-lg shadow-lg p-4">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                    <h3 class="text-xl font-bold my-2">{{ $product->name }}</h3>
                    <p class="mb-2">{{ $product->description }}</p>
                    <p class="price">{{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- JavaScript voor Slick Slider -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.product-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                dots: true
            });
        });
    </script>

</body>
</html>
