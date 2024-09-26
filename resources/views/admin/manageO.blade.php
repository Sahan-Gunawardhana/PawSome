@extends('layouts.adminheader')

@section('content')
<div class="admin-main">
    <h1 class="text-3xl font-bold mb-6 text-black-800">Manage Orders</h1>

    <!-- Orders Table -->
    <div class="overflow-auto">
        <table class="admin-table w-full">
            <thead class="admin-table-header">
                <tr>
                    <th class="py-3 px-4 text-left">Order ID</th>
                    <th class="py-3 px-6 text-left">Order Date</th>
                    <th class="py-3 px-6 text-left">Total</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="py-4 px-6 text-gray-600 text-left">{{ $order->id }}</td>
                    <td class="py-4 px-6 text-gray-600 text-left">{{ $order->order_date }}</td>
                    <td class="py-4 px-6 text-gray-600 text-left">LKR {{ $order->total }}</td>
                    <td class="py-4 px-6 text-left">
                        <form action="{{ url('order/update-status') }}" method="post" class="inline-flex">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <select name="status" class="border border-black rounded-md text-gray-800">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                            </select>
                            <button type="submit" class="bg-green-600 text-white ml-2 px-2 py-1 rounded-lg hover:bg-green-700 transition duration-300">
                                Update
                            </button>
                        </form>
                    </td>
                    <td class="py-4 px-6 text-left">
                        <a href="{{ url('order/view/'.$order->id.'/items') }}" class="bg-blue-600 text-white px-3 py-2 rounded-lg hover:bg-blue-700 transition duration-300 inline-block mb-2">
                            View Items
                        </a>
                        <form action="{{ url('order/delete') }}" method="post" class="inline-block">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <input type="submit" value="Delete" class="warning-error">
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-600 text-xl">No orders available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection