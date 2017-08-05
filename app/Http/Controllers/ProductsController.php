<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }

    public function show($sku)
    {
        $product = Product::findOrFail($sku);

        return view('products.show', ['product' => $product]);
    }
}
