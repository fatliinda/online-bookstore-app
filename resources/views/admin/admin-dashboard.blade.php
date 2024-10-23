@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-6">
    <!-- Dashboard Title -->
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Admin Dashboard</h1>

    <!-- Statistics Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Total Sales Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <!-- Sales Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 10-8 0v2M5 12h14m1 4H6m1 0a2 2 0 110-4m12 0a2 2 0 110 4" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700">Total Sales</h2>
                    <p class="text-2xl text-gray-900 font-bold">${{ number_format($totalSales, 2) }}</p>
                </div>
            </div>
        </div>

        <!-- Total Orders Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <!-- Orders Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M5 15h14m1-5a2 2 0 110 4m-16-4a2 2 0 110 4m1 6h12m1 0H4" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700">Total Orders</h2>
                    <p class="text-2xl text-gray-900 font-bold">{{ $totalOrders }}</p>
                </div>
            </div>
        </div>

        <!-- Total Products Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <!-- Products Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v11a1 1 0 001 1h16a1 1 0 001-1V7m-5 7h6M5 10h14M3 13h6" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700">Total Products</h2>
                    <p class="text-2xl text-gray-900 font-bold">{{ $totalProducts }}</p>
                </div>
            </div>
        </div>

        <!-- Total Users Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-full">
                    <!-- Users Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v1m0-4v-1m-6 5h12m-3 5a5 5 0 11-6-6m12 1a7 7 0 11-9-9m-2 9a9 9 0 119-9" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-lg font-semibold text-gray-700">Total Users</h2>
                    <p class="text-2xl text-gray-900 font-bold">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
