@extends('layouts.app')

@section('content')
    <h1>Payments details</h1>

    <h4 class="text-center"><strong>Grand total: </strong>${{ $order->total }}</h4>

    <div class="text-center mb-3">
        <form
            method="post"
            action="{{ route('orders.payments.store', ['order' => $order->id]) }}"
            class="d-inline"
        >
            @csrf
            <button class="btn btn-success" type="submit">Pay</button>
        </form>
    </div>

@endsection
