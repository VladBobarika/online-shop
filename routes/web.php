<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category; 


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

    $list = Product::get();
    dd($list);
    //$product = Product::find(3);
    //    $date = [
    //        'name' => 'Iphone 12'
    //    ];
    //    $product = Product::create($date);
    //$product = new Product();
    //$product->name = "Samsung x20";
    //$product->save();
    //dd($product);
    //dd(Product::all());

    return view('main');
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


