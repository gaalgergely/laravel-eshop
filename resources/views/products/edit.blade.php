@extends('layouts.app')

@section('content')
    <h1>Edit product</h1>
    <form method="post" action="{{ route('products.update', ['product' => $product->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $product->title }}" required>
        </div>
        <div class="form-row">
            <label for="">Description</label>
            <input class="form-control" type="text" name="description" value="{{ $product->description }}" required>
        </div>
        <div class="form-row">
            <label for="">Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-row">
            <label for="">Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{ $product->stock }}" required>
        </div>
        <div class="form-row">
            <label for="">Status</label>
            <select class="custom-select" name="status" id="" required>
                <option value="">Select ...</option>
                <option value="available" {{ $product->status==='available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ $product->status==='available' ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg mt-3">Update Product</button>
        </div>
    </form>
@endsection
