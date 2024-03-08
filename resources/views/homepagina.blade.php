<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij onze webshop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Fix for Swiper Slider container overflow */
        .swiper-container {
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
        <div class="container mx-auto flex justify-between items-center py-2">
            <a class="navbar-brand p-0" href="home">
                <img src="LogoNoText.PNG" alt="Logo" class="navbar-logo max-h-10 max-w-40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0 flex justify-end items-center">
                    <a class="btn btn-contact mr-4" href="/contact">Demo</a>
                    <div>
                        <a class="btn btn-demo mr-2" href="#">Demo 1</a>
                        <a class="btn btn-demo mr-2" href="#">Demo 2</a>
                        <a class="btn btn-demo mr-2" href="#">Demo 3</a>
                        <a class="btn btn-demo" href="#">Demo 4</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <div class="jumbotron bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-4xl font-bold mb-4">Welkom bij onze webshop</h1>
            <p class="text-lg mb-8">Ontdek de nieuwste aanbiedingen en trends.</p>
            <a href="index" class="btn btn-primary">Bekijk onze aanbiedingen</a>
        </div>

        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4">Nieuwe producten</h2>
                    <!-- Product slider for new products -->
                    <div class="swiper-container product-slider">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                                <div class="swiper-slide">
                                    <a href="{{ url('/product/'.$product->id) }}" class="product-link">
                                        <div class="product-item bg-white rounded-lg shadow-lg p-4">
                                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                                            <h3 class="text-xl font-bold my-2">{{ $product->name }}</h3>
                                            <p class="mb-2">{{ $product->description }}</p>
                                            <p class="price">{{ $product->price }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-4">Korting collectie</h2>
                    <!-- Product slider for discounted collection -->
                    <div class="swiper-container product-slider">
                        <div class="swiper-wrapper">
                            @foreach($products as $product)
                                <div class="swiper-slide">
                                    <a href="{{ url('/product/'.$product->id) }}" class="product-link">
                                        <div class="product-item bg-white rounded-lg shadow-lg p-4">
                                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                                            <h3 class="text-xl font-bold my-2">{{ $product->name }}</h3>
                                            <p class="mb-2">{{ $product->description }}</p>
                                            <p class="price">{{ $product->price }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <footer class="bg-gray-900 text-white py-8">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Onze Webshop. Alle rechten voorbehouden.</p>
            </div>
        </footer>
    
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            // Initialize Swiper for each product slider
            var productSliders = document.querySelectorAll('.product-slider');
    
            productSliders.forEach(function(slider) {
                var swiper = new Swiper(slider, {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 5000, // milliseconds
                        disableOnInteraction: false,
                    },
                });
            });
        </script>
    </body>
    
</html>
