<div class="product-slider">
            @foreach($products as $product)
                <div class="product-item bg-white rounded-lg shadow-lg p-4">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                    <h3 class="text-xl font-bold my-2">{{ $product->name }}</h3>
                    <p class="mb-2">{{ $product->description }}</p>
                    <p class="price">{{ $product->price }}</p>
                </div>
            @endforeach
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