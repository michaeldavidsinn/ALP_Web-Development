<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/view_products', [ProductsController::class, 'index']);
Route::get('/products/{products}', [ProductsController::class,'show']);

Route::get('/view_page', [PageController::class, 'index']);
Route::get('/page/{page}', [PageController::class, 'show'])->name('page');

Route::get('/view_store', [StoreController::class, 'index']);
Route::get('/store/{store}', [StoreController::class,'show']);

Route::get('/view_brand', [BrandController::class, 'index']);
Route::get('/brand/{brand}', [BrandController::class,'show']);

Route::get('/view_category', [CategoryController::class, 'index']);
Route::get('/category/{category}', [CategoryController::class,'show']);

Route::get('/view_article', [ArticleController::class, 'index']);
Route::get('/article/{article}', [ArticleController::class,'show']);

Route::get('/view_sales', [SalesController::class, 'index']);
Route::get('/sales/{sales}', [SalesController::class,'show']);

Route::get('/view_gallery', [GalleryController::class, 'index']);
Route::get('/gallery/{gallery}', [GalleryController::class,'show']);

Route::get('/view_homepage', [HomePageController::class, 'index']);



Route::group([

    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin'
], function(){

    Route::get('/', function () {
        return view('index');
    })->middleware('auth')->name('index_admin');

    Route::get('/',[App\Http\Controllers\HomeController::class,'indexadmin'])->middleware('auth')->name('index_admin');

Route::get('/view_products', [ProductsController::class, 'index'])->middleware('auth')->name('view_products');
Route::get('/create_products', [ProductsController::class, 'create'])->middleware('auth')->name('create_products');
Route::post('/store_products', [ProductsController::class, 'store'])->middleware('auth')->name('store_products');
Route::get('/edit_products/{products}', [ProductsController::class, 'edit'])->middleware('auth')->name('edit_products');
Route::put('/update_products/{products}', [ProductsController::class, 'update'])->middleware('auth')->name('update_products');
Route::delete('/delete_products/{products}', [ProductsController::class, 'destroy'])->middleware('auth')->name('delete_products');

Route::get('/view_store', [StoreController::class, 'index'])->middleware('auth')->name('view_store');
Route::get('/store/{store}', [StoreController::class,'show'])->middleware('auth')->name('show_store');
Route::get('/create_store', [StoreController::class, 'create'])->middleware('auth')->name('create_store');
Route::post('/store_store', [StoreController::class, 'store'])->middleware('auth')->name('store_store');
Route::get('/edit_store/{store}', [StoreController::class, 'edit'])->middleware('auth')->name('edit_store');
Route::put('/update_store/{store}', [StoreController::class, 'update'])->middleware('auth')->name('update_store');
Route::delete('/delete_store/{store}', [StoreController::class, 'destroy'])->middleware('auth')->name('delete_store');

Route::get('/view_brand', [BrandController::class, 'index'])->middleware('auth')->name('view_brand');
Route::get('/brand/{brand}', [BrandController::class,'show'])->middleware('auth')->name('show_brand');
Route::get('/create_brand', [BrandController::class, 'create'])->middleware('auth')->name('create_brand');
Route::post('/store_brand', [BrandController::class, 'store'])->middleware('auth')->name('store_brand');
Route::get('/edit_brand/{brand}', [BrandController::class, 'edit'])->middleware('auth')->name('edit_brand');
Route::put('/update_brand/{brand}', [BrandController::class, 'update'])->middleware('auth')->name('update_brand');
Route::delete('/delete_brand/{brand}', [BrandController::class, 'destroy'])->middleware('auth')->name('delete_brand');

Route::get('/view_category', [CategoryController::class, 'index'])->middleware('auth')->name('view_category');
Route::get('/category/{category}', [CategoryController::class,'show'])->middleware('auth')->name('show_category');
Route::get('/create_category', [CategoryController::class, 'create'])->middleware('auth')->name('create_category');
Route::post('/store_category', [CategoryController::class, 'store'])->middleware('auth')->name('store_category');
Route::get('/edit_category/{category}', [CategoryController::class, 'edit'])->middleware('auth')->name('edit_category');
Route::put('/update_category/{category}', [CategoryController::class, 'update'])->middleware('auth')->name('update_category');
Route::delete('/delete_category/{category}', [CategoryController::class, 'destroy'])->middleware('auth')->name('delete_category');

Route::get('/view_article', [ArticleController::class, 'index'])->middleware('auth')->name('view_article');
Route::get('/article/{article}', [ArticleController::class,'show'])->middleware('auth')->name('show_article');
Route::get('/create_article', [ArticleController::class, 'create'])->middleware('auth')->name('create_article');
Route::post('/store_article', [ArticleController::class, 'store'])->middleware('auth')->name('store_article');
Route::get('/edit_article/{article}', [ArticleController::class, 'edit'])->middleware('auth')->name('edit_article');
Route::put('/update_article/{article}', [ArticleController::class, 'update'])->middleware('auth')->name('update_article');
Route::delete('/delete_article/{article}', [ArticleController::class, 'destroy'])->middleware('auth')->name('delete_article');

Route::get('/view_gallery', [GalleryController::class, 'index'])->middleware('auth')->name('view_gallery');
Route::get('/gallery/{gallery}', [GalleryController::class,'show'])->middleware('auth')->name('show_gallery');
Route::get('/create_gallery', [GalleryController::class, 'create'])->middleware('auth')->name('create_gallery');
Route::post('/store_gallery', [GalleryController::class, 'store'])->middleware('auth')->name('store_gallery');
Route::delete('/delete_gallery/{gallery}', [GalleryController::class, 'destroy'])->middleware('auth')->name('delete_gallery');

Route::get('/view_sales', [SalesController::class, 'index'])->middleware('auth')->name('view_sales');
Route::get('/sales/{sales}', [SalesController::class,'show'])->middleware('auth')->name('show_sales');
Route::get('/create_sales', [SalesController::class, 'create'])->middleware('auth')->name('create_sales');
Route::post('/store_sales', [SalesController::class, 'store'])->middleware('auth')->name('store_sales');
Route::get('/edit_sales/{sales}', [SalesController::class, 'edit'])->middleware('auth')->name('edit_sales');
Route::put('/update_sales/{sales}', [SalesController::class, 'update'])->middleware('auth')->name('update_sales');
Route::delete('/delete_sales/{sales}', [SalesController::class, 'destroy'])->middleware('auth')->name('delete_sales');
}
);
Route::get('/home',[App\Http\Controllers\HomeController::class,'index']);
Auth::routes();
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
?>


