@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Orders</h1>

    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="border px-4 py-2">Order ID</th>
                <th class="border px-4 py-2">Customer</th>
                <th class="border px-4 py-2">Total</th>
                <th class="border px-4 py-2">Status</th>
                <th class="border px-4 py-2">Date</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td class="border px-4 py-2">{{ $order->id }}</td>
                <td class="border px-4 py-2">{{ $order->name }}</td>
                <td class="border px-4 py-2">${{ $order->total_price }}</td>
                <td class="border px-4 py-2">
                    <form action="{{ route('admin-orders-updateStatus', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select">
                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                            <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                            <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                            <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Update</button>
                    </form>
                </td>
                <td class="border px-4 py-2">{{ $order->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</div>
@endsection
