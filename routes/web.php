    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\apiController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    */

Route::get('/index', [apiController::class, 'getProductList']);

Route::get('/product/{product}', [apiController::class, 'getProduct']);

Route::get('/products/search' , [apiController::class, 'searchProduct']);


    Route::get('/', [ProductController::class, 'home']);

    Route::get('/home', [ProductController::class, 'home']);


    Route::get('/checkout', function () {
        return view('checkout');
    });


    Route::get('/winkelmand', [ShoppingCartController::class, 'showCart'])->name('cart.show');
    Route::get('/add-to-cart/{id}', [ShoppingCartController::class, 'addToCart'])->name('cart.add');
    Route::put('/update-quantity/{id}', [ShoppingCartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::delete('/remove-from-cart/{id}', [ShoppingCartController::class, 'removeFromCart'])->name('cart.remove');
    
    Route::get('/understructure', function () {
        return view('understructure');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
