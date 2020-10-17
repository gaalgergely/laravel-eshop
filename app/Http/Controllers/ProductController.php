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
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create(request()->all());

        return $product;
    }

    public function edit(Product $product)
    {
        return view('products.edit')->with([
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return $product;
    }
}
