<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = Product::with('category')->get();
        return view('products', compact('products'));
    }
}
