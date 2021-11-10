<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminOrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingAdminController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryFrontEnd;
use App\Http\Controllers\Fe_Home;
use App\Http\Controllers\FrontEndCart;
use App\Http\Controllers\FrontEndLoginCheckout;
use App\Http\Controllers\FrontEndProduct;
use App\Http\Controllers\AdminRolesController;
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
        ])->name('settings.index')->middleware('can:setting_list');
        Route::get('/create', [
            SettingAdminController::class, 'create'
        ])->name('settings.create')->middleware('can:setting_add');
        Route::post('/store', [
            SettingAdminController::class, 'store'
        ])->name('settings.store');
        Route::get('/edit/{id}', [
            SettingAdminController::class, 'edit'
        ])->name('settings.edit')->middleware('can:setting_edit');
        Route::post('/update/{id}', [
            SettingAdminController::class, 'update'
        ])->name('settings.update');
        Route::get('/delete/{id}', [
            SettingAdminController::class, 'delete'
        ])->name('settings.delete')->middleware('can:setting_delete');
    });
    Route::prefix('slider')->group(function () {
        Route::get('/', [
            AdminSliderController::class, 'index'
        ])->name('slider.index')->middleware('can:slider_list');
        Route::get('/create', [
            AdminSliderController::class, 'create'
        ])->name('slider.create')->middleware('can:slider_add');
        Route::post('/store', [
            AdminSliderController::class, 'store'
        ])->name('slider.store');
        Route::get('/edit/{id}', [
            AdminSliderController::class, 'edit'
        ])->name('slider.edit')->middleware('can:slider_edit');
        Route::post('/update/{id}', [
            AdminSliderController::class, 'update'
        ])->name('slider.update');
        Route::get('/delete/{id}', [
            AdminSliderController::class, 'delete'
        ])->name('slider.delete')->middleware('can:slider_delete');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [
            AdminCategoryController::class, 'index'
        ])->name('categories.index')->middleware('can:category_list');
        Route::get('/create', [
            AdminCategoryController::class, 'create'
        ])->name('categories.create')->middleware('can:category_add');
        Route::post('/store', [
            AdminCategoryController::class, 'store'
        ])->name('categories.store');

        Route::get('/edit/{id}', [
            AdminCategoryController::class, 'edit'
        ])->name('categories.edit')->middleware('can:category_edit');
        Route::get('/delete/{id}', [
            AdminCategoryController::class, 'delete'
        ])->name('categories.delete');
        Route::post('/update/{id}', [
            AdminCategoryController::class, 'update'
        ])->name('categories.update')->middleware('can:category_delete');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', [
            AdminProductController::class, 'index'
        ])->name('product.index')->middleware('can:product_list');
        Route::get('/create', [
            AdminProductController::class, 'create'
        ])->name('product.create')->middleware('can:product_add');
        Route::post('/store', [
            AdminProductController::class, 'store'
        ])->name('product.store');
        Route::get('/edit/{id}', [
            AdminProductController::class, 'edit'
        ])->name('product.edit')->middleware('can:product_edit');
        Route::post('/update/{id}', [
            AdminProductController::class, 'update'
        ])->name('product.update');
        Route::get('/delete/{id}', [
            AdminProductController::class, 'delete'
        ])->name('product.delete')->middleware('can:product_delete');
    });

    Route::prefix('order')->group(function () {
        Route::get('/', [
            AdminOrderController::class, 'index'
        ])->name('order.index')->middleware('can:order_list');
        Route::get('/delete/{id}', [
            AdminOrderController::class, 'delete'
        ])->name('order.delete')->middleware('can:order_delete');
        Route::get('/showdetail/{id}', [
            AdminOrderController::class, 'detail'
        ])->name('order.detail')->middleware('can:order_see');
    });
    Route::prefix('users')->group(function(){
        Route::get('/', [
            AdminUserController::class, 'index'
        ])->name('users.index')->middleware('can:user_list');
        Route::get('/create', [
            AdminUserController::class, 'create'
        ])->name('users.create')->middleware('can:user_add');
        Route::post('/store', [
            AdminUserController::class, 'store'
        ])->name('users.store');
        Route::get('/edit/{id}', [
            AdminUserController::class, 'edit'
        ])->name('users.edit')->middleware('can:user_edit');
        Route::post('/update/{id}', [
            AdminUserController::class, 'update'
        ])->name('users.update');
        Route::get('/delete/{id}', [
            AdminUserController::class, 'delete'
        ])->name('users.delete')->middleware('can:user_delete');
        
    });
    Route::prefix('Roles')->group(function () {
        Route::get('/', [
            AdminRolesController::class, 'index'
        ])->name('roles.index')->middleware('can:role_list');
        Route::get('/create', [
            AdminRolesController::class, 'create'
        ])->name('roles.create')->middleware('can:role_add');
        Route::post('/store', [
            AdminRolesController::class, 'store'
        ])->name('roles.store');
        Route::get('/edit/{id}', [
            AdminRolesController::class, 'edit'
        ])->name('roles.edit')->middleware('can:role_edit');
        Route::post('/update/{id}', [
            AdminRolesController::class, 'update'
        ])->name('roles.update');
        Route::get('/delete/{id}', [
            AdminRolesController::class, 'delete'
        ])->name('roles.delete')->middleware('can:role_delete');
        
    });
    Route::get('Permission',function () {
        return view('admin.not_permission');
        
    })->name('not_permission');
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
Route::get('contact',[
    Fe_Home::class, 'contact'
])->name('contact');

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