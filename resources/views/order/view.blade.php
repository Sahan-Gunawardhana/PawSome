@extends('layouts.adminheader')

@section('content')
<div class="admin-main">
    <h1 class="text-3xl font-bold mb-6 text-black-800">Order Details - ID: {{ $order->id }}</h1>
    <div class="bg-white border border-black-300 rounded-lg shadow-md p-6">
        <p class="text-gray-600">Customer ID: {{ $order->customer_id }}</p>
        <p class="text-gray-600">Order Date: {{ $order->order_date }}</p>
        <p class="text-gray-600">Total: LKR {{ $order->total }}</p>
        <p class="text-gray-600">Status: {{ $order->status }}</p>

        <h2 class="text-2xl font-bold mt-6 text-black-800">Order Items</h2>
        <ul>
            @foreach ($order->orderItems as $item)
            <li class="mt-4">
                {{ $item->product->pro_name }} x {{ $item->quantity }} = LKR {{ $item->total }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection