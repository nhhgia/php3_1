    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProductController;


    // Danh sách sản phẩm
    Route::get('/san-pham', function () {
        return view('products');
    });
    // Chi tiết sản phẩm (Route có tham số)
    Route::get('/san-pham/{slug}',[ProductController::class, 'show']);
    Route::get('/', [HomeController::class, 'index']);

    use App\Http\Controllers\Admin\CategoryController;
    use App\Http\Controllers\Admin\ProductController as AdminProductController;

        Route::prefix('admin')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('product', AdminProductController::class);
    });

