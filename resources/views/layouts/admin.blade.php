<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex">
        <aside class="w-64 bg-gray-800 min-h-screen">
            <div class="text-white font-bold text-xl p-4">
                Admin Panel
            </div>
            <nav>
                <a href="" class="block p-4 text-white hover:bg-gray-600">Dashboard</a>
                <a href="{{route('admin-books-index')}}" class="block p-4 text-white hover:bg-gray-600">Books</a>
                <a href="{{route('admin-orders-index')}}" class="block p-4 text-white hover:bg-gray-600">Orders</a>
                <a href="{{route('admin-users-index')}}" class="block p-4 text-white hover:bg-gray-600">Users</a>
            </nav>
        </aside>

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
