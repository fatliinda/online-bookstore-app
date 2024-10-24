@extends('layouts.app')

@section('title', 'Home')

@section('content')


@include('partials.flash')
<div class="h-screen py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                            </tr>
                        </thead>
                        <tbody>
@if(session('cart'))
    @foreach(session('cart') as $id => $details)
        <tr>
            <td class="py-4">
                <div class="flex items-center">
                    <span class="font-semibold">{{ $details['title'] }}</span>
                </div>
            </td>
            <td class="py-4">${{ $details['price'] }}</td>
            <td class="py-4">
                <div class="flex items-center">
                    <!-- Decrease Quantity -->
                    <form action="{{ route('cart-update', $id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="quantity" value="{{ $details['quantity'] - 1 }}">
                        <button type="submit" class="border rounded-md py-2 px-4 mr-2" @if($details['quantity'] == 1) disabled @endif>-</button>
                    </form>

                    <span class="text-center w-8">{{ $details['quantity'] }}</span>

                    <!-- Increase Quantity -->
                    <form action="{{ route('cart-update', $id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="quantity" value="{{ $details['quantity'] + 1 }}">
                        <button type="submit" class="border rounded-md py-2 px-4 ml-2">+</button>
                    </form>
                </div>
            </td>
            <td class="py-4">${{ $details['price'] * $details['quantity'] }}</td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="4" class="text-center py-4">Your cart is empty</td>
    </tr>
@endif
</tbody>

                    </table>
                </div>
            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Summary</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span>
                            ${{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart', []))) }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span>$1.99</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span>$0.00</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold">
                            ${{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart', []))) + 1.99 }}
                        </span>
                    </div>
                    <!-- Checkout Button -->
                    <a href="{{ route('view-checkout') }}" class="bg-brightRed text-white py-2 px-4 rounded-lg mt-4 w-full text-center block">
                         Checkout
                    </a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection