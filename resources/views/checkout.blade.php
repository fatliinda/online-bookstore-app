<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container mx-auto p4-10">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-xl">
        <div class="md:flex">
            <div class="w-full px-6 py-8 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800">Checkout</h2>
                <p class="mt-4 text-gray-600">Please fill out the form below to complete your purchase.</p>
                <form action="{{ route('checkout') }}" method="POST" class="mt-6">
    @csrf
    <div class="mb-6">
        <label class="block text-gray-800 font-bold mb-2" for="name">Name</label>
        <input 
            name="name" 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="name" 
            type="text" 
            placeholder="John Doe" 
            value="{{ auth()->check() ? auth()->user()->name : old('name') }}" 
            required
        >
    </div>

    <div class="mb-6">
        <label class="block text-gray-800 font-bold mb-2" for="email">Email</label>
        <input 
            name="email" 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="email" 
            type="email" 
            placeholder="johndoe@example.com" 
            value="{{ auth()->check() ? auth()->user()->email : old('email') }}" 
            required
        >
    </div>

    <div class="mb-6">
        <label class="block text-gray-800 font-bold mb-2" for="address">Address</label>
        <input 
            name="address" 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="address" 
            type="text" 
            placeholder="Prizren, Kosove" 
            value="{{ old('address') }}" 
            required
        >
    </div>

    <div class="mb-6">
        <label class="block text-gray-800 font-bold mb-2" for="phone">Phone Number</label>
        <input 
            name="phone" 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="phone" 
            type="text" 
            placeholder="+383 49 222 111" 
            value="{{ old('phone') }}" 
            required
        >
    </div>

    <button type="submit" class="bg-brightRed hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Submit
    </button>
</form>


            </div>
        </div>
    </div>
</div>
    
</body>
</html>