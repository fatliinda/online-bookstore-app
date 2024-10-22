<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="container mx-auto py-8">
        @yield('content')
    </div>

    @include('partials.footer')

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
