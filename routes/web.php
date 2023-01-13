<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\FrontendController::class,'index']);
Route::get('/allproducts',[App\Http\Controllers\FrontendController::class,'allProducts'])->name('product.all');
Route::get('/trend',[App\Http\Controllers\FrontendController::class,'trend'])->name('trend');
Route::get('/procat/{slug}',[App\Http\Controllers\FrontendController::class,'procat'])->name('procat');
Route::get('details/{slug}',[App\Http\Controllers\FrontendController::class,'details'])->name('details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::post('cart',[App\Http\Controllers\CartController::class,'addcart'])->name('cart');
    Route::get('mycart',[App\Http\Controllers\CartController::class,'cart'])->name('mycart');
    Route::get('mycart/delete/{id}',[App\Http\Controllers\CartController::class,'destroy'])->name('mycart.delete');
});

 Route::middleware(['auth','admin'])->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
    // Routes for Categories
    Route::get('/categories',[App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories');
    Route::get('/categories/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('category.create');
    Route::post('/categories/store',[App\Http\Controllers\Admin\CategoryController::class,'store'])->name('category.store');
    Route::get('/categories/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('category.edit');
    Route::post('/categories/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('category.update');
    Route::get('/categories/show/{id}',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('category.show');
    Route::get('/categories/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('category.destroy');
    // Routes for Products
    Route::get('/products',[App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products');
    Route::get('/products/create',[App\Http\Controllers\Admin\ProductController::class,'create'])->name('product.create');
    Route::post('/products/store',[App\Http\Controllers\Admin\ProductController::class,'store'])->name('product.store');
    Route::get('/products/edit/{id}',[App\Http\Controllers\Admin\ProductController::class,'edit'])->name('product.edit');
    Route::post('/products/update/{id}',[App\Http\Controllers\Admin\ProductController::class,'update'])->name('product.update');
    Route::get('/products/show/{id}',[App\Http\Controllers\Admin\ProductController::class,'show'])->name('product.show');
    Route::get('/products/delete/{id}',[App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('product.destroy');
 });
