@extends('layouts.app')

@section('content')
    <h1>Create product</h1>
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <div class="form-row">
            <label for="">Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-row">
            <label for="">Description</label>
            <input class="form-control" type="text" name="description" required>
        </div>
        <div class="form-row">
            <label for="">Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" required>
        </div>
        <div class="form-row">
            <label for="">Stock</label>
            <input class="form-control" type="number" min="0" name="stock" required>
        </div>
        <div class="form-row">
            <label for="">Status</label>
            <select class="custom-select" name="status" id="" required>
                <option value="">Select ...</option>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg mt-3">Create Product</button>
        </div>
    </form>
@endsection
