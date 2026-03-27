    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ProductController;


    // Danh sách sản phẩm
    Route::get('/san-pham', function () {
        return view('products');
    });
    // Chi tiết sản phẩm (Route có tham số)
    Route::get('/san-pham/{slug}', function ($slug) {
        return  view('productdetail', ['slug' => $slug]);
    });
    Route::get('/', [HomeController::class, 'index']);
