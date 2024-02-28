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