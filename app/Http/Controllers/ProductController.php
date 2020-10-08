<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index')->with([
            'products' => $products
        ]);
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);

        return view('products.show')->with([
            'product' => $product
        ]);
    }

    public function create()
    {

    }

    public function store($product)
    {

    }

    public function edit($product)
    {

    }

    public function update($product)
    {

    }

    public function destroy($product)
    {

    }
}
