<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingAdminController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryFrontEnd;
use App\Http\Controllers\Fe_Home;
use App\Http\Controllers\FrontEndCart;
use App\Http\Controllers\FrontEndLoginCheckout;
use App\Http\Controllers\FrontEndProduct;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
// back-end

// login
Route::get('/admin', [
    AdminController::class,'loginAdmin'
])->name('login');
Route::post('/admin',[
    AdminController::class,'postLoginAdmin'
]);
Route::get('/logout', [
    AdminController::class, 'logoutAdmin'
])->name('logoutAdmin');
//

Route::prefix('admin')->group(function(){
    Route::prefix('settings')->group(function(){
        Route::get('/', [
            SettingAdminController::class, 'index'
        ])->name('settings.index');
        Route::get('/create', [
            SettingAdminController::class, 'create'
        ])->name('settings.create');
        Route::post('/store', [
            SettingAdminController::class, 'store'
        ])->name('settings.store');
        Route::get('/edit/{id}', [
            SettingAdminController::class, 'edit'
        ])->name('settings.edit');
        Route::post('/update/{id}', [
            SettingAdminController::class, 'update'
        ])->name('settings.update');
        Route::get('/delete/{id}', [
            SettingAdminController::class, 'delete'
        ])->name('settings.delete');
    });
    Route::prefix('slider')->group(function () {
        Route::get('/', [
            AdminSliderController::class, 'index'
        ])->name('slider.index');
        Route::get('/create', [
            AdminSliderController::class, 'create'
        ])->name('slider.create');
        Route::post('/store', [
            AdminSliderController::class, 'store'
        ])->name('slider.store');
        Route::get('/edit/{id}', [
            AdminSliderController::class, 'edit'
        ])->name('slider.edit');
        Route::post('/update/{id}', [
            AdminSliderController::class, 'update'
        ])->name('slider.update');
        Route::get('/delete/{id}', [
            AdminSliderController::class, 'delete'
        ])->name('slider.delete');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [
            AdminCategoryController::class, 'index'
        ])->name('categories.index');
        Route::get('/create', [
            AdminCategoryController::class, 'create'
        ])->name('categories.create');
        Route::post('/store', [
            AdminCategoryController::class, 'store'
        ])->name('categories.store');

        Route::get('/edit/{id}', [
            AdminCategoryController::class, 'edit'
        ])->name('categories.edit');
        Route::get('/delete/{id}', [
            AdminCategoryController::class, 'delete'
        ])->name('categories.delete');
        Route::post('/update/{id}', [
            AdminCategoryController::class, 'update'
        ])->name('categories.update');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', [
            AdminProductController::class, 'index'
        ])->name('product.index');
        Route::get('/create', [
            AdminProductController::class, 'create'
        ])->name('product.create');
        Route::post('/store', [
            AdminProductController::class, 'store'
        ])->name('product.store');
        Route::get('/edit/{id}', [
            AdminProductController::class, 'edit'
        ])->name('product.edit');
        Route::post('/update/{id}', [
            AdminProductController::class, 'update'
        ])->name('product.update');
        Route::get('/delete/{id}', [
            AdminProductController::class, 'delete'
        ])->name('product.delete');
    });

    Route::prefix('order')->group(function () {
        Route::get('/', [
            AdminOrderController::class, 'index'
        ])->name('order.index');
        Route::get('/delete/{id}', [
            AdminOrderController::class, 'delete'
        ])->name('order.delete');
        Route::get('/showdetail/{id}', [
            AdminOrderController::class, 'detail'
        ])->name('order.detail');
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// end back-end


//front-end

Route::get('trangchu',[
    Fe_Home::class, 'index'
])->name('fe.home');
Route::post('search',[
    Fe_Home::class, 'search'
])->name('search');

Route::prefix('fe')->group(function(){
    Route::prefix('dmsp')->group(function(){
        Route::get('/{id}',[
            CategoryFrontEnd::class,'index'
        ])->name('categoryfe');
    });
    Route::get('chi-tiet-san-pham/{id}',[
        FrontEndProduct::class,'index'
    ])->name('detailsp');
    Route::post('save_cart',[
        FrontEndCart::class, 'save_cart'
    ])->name('save_cart');
    Route::get('show_cart',[
        FrontEndCart::class, 'show_cart'
    ])->name('show_cart');
    Route::get('delete_cart/{rowId}',[
        FrontEndCart::class, 'delete_cart'
    ])->name('delete_cart');
    Route::post('update_cart',[
        FrontEndCart::class, 'update_cart'
    ])->name('update_cart');
    Route::get('checkout',[
        FrontEndLoginCheckout::class, 'checkout'
    ])->name('checkout');
    Route::get('login_checkout',[
        FrontEndLoginCheckout::class, 'logincheckout'
    ])->name('login_checkout');
    Route::post('register',[
        FrontEndLoginCheckout::class, 'register'
    ])->name('register_customer');
    Route::post('login_customer',[
        FrontEndLoginCheckout::class, 'login'
    ])->name('login_customer');
    Route::get('logout_customer',[
        FrontEndLoginCheckout::class, 'logout'
    ])->name('logout_customer');
    Route::post('store_order',[
        FrontEndLoginCheckout::class, 'store_order'
    ])->name('store_order');
    Route::post('order_place',[
        FrontEndLoginCheckout::class, 'order_place'
    ])->name('order_place');
    Route::get('payment',[
        FrontEndLoginCheckout::class, 'payment'
    ])->name('payment');
});
//end- front-end