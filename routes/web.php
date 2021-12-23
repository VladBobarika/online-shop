<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;


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

Route::get('/', function () {
    return view('main');
});

Route::get('admin', function (){
    return view('admin.index');
});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::resources([
        'brand'=> \App\Http\Controllers\Admin\BrandController::class,
        'category'=> \App\Http\Controllers\Admin\CategoryController::class,
        'product'=> \App\Http\Controllers\Admin\ProductController::class
    ]);
});


Route::get('product/store', function () {
    return view('store');
});

Route::get('/product', function () {
    $category = new Category();
    $category->name = 'Mobile phone';
    $category->status = true;
    $category->save();

    $data = [
        'name' => 'Xiaomi mi 11',
        'status' => true
    ];
    $category = Category::create($data);
    return view('product');
});

Route::get('catalog', [ProductController::class, 'catalog']) ->name('catalog');

Route::get('hello', [SiteController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


