<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index($id) {
        $product = Product::findOrFail($id);
        $products = Product::all();
        return view('product.product', [
            'product' => $product,
            'products' => $products
        ]);
    }

    public function catalog() {
        $offset = 0;
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::where('status',1)->simplePaginate(10);
        return view('product.store', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
}
