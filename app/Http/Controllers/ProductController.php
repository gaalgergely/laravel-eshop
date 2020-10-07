<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); dd($products);

        return view('products.index');
    }

    public function show($product)
    {
        $product = Product::findOrFail($product); dd($product);
        
        return view('products.show');
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
