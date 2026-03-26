    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    // Danh sách sản phẩm
    Route::get('/san-pham', function () {
        return view('products');
    });
    // Chi tiết sản phẩm (Route có tham số)
    Route::get('/san-pham/{id}', function ($id) {
        return  view('productdetail'). $id;
    });
    Route::get('/', [HomeController::class, 'index']);
