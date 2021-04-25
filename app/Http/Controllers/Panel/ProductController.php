<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\PanelProduct as Product;
//use App\Models\Product;
use App\Scopes\AvailableScope;

//use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::withoutGlobalScope(AvailableScope::class)->get();
        $products = Product::without('images')->get();

        return view('products.index')->with([
            'products' => $products
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show')->with([
            'product' => $product
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

        return redirect()
            ->route('products.index')
            ->withSuccess("The product with id {$product->id} was created.");
    }

    public function edit(Product $product)
    {
        return view('products.edit')->with([
            'product' => $product
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()
            ->route('products.index')
            ->withSuccess("The product with id {$product->id} was updated.");
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->withSuccess("The product with id {$product->id} was removed.");
    }
}
