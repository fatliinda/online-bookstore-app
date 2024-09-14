<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="flex items-center justify-between p-4 bg-gray-200">
  <!-- Logo Section -->
  <div class="flex-shrink-0 text-xl font-bold">
  B <i class=" text-brightRed fa-solid fa-book-open"></i> kstore
  </div>

  <!-- Navigation Links -->
  <div class="hidden md:flex space-x-6">
    <a href="#" class="hover:text-gray-400">Home</a>
    <a href="#" class="hover:text-gray-400">About</a>
    <a href="#" class="hover:text-gray-400">Services</a>
    <a href="#" class="hover:text-gray-400">Contact</a>
  </div>

  <!-- Search Bar -->
  <div class="flex items-center">
    <input type="text" placeholder="Search" class="hidden md:block p-2 rounded-md text-black">
    <button class="ml-2 p-2 bg-gray-700 rounded-md hover:bg-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
      </svg>
    </button>
  </div>
</nav>


    <!-- Hero Section -->
    <section id="hero" class='bg-pinkBg'>
      <!-- Flex Container -->
      <div
        class="container flex flex-col-reverse items-center py-24 px-12 mx-auto  space-y-0 md:space-y-0 md:flex-row"
      >
        <!-- Left item -->
        <div class="flex flex-col mb-12 space-y-12 md:w-1/2">
        <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            The bookwaorms editor
          </p>
          <h1
            class="max-w-md text-2xl font-light text-center md:text-5xl md:text-left"
          >
            Featured books of this month
          </h1>
          
          <div class="flex justify-center md:justify-start">
            <a
              href="#"
              class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight"
              >Get Started</a
            >
          </div>
        </div>
        <!-- Image -->
        <div class="md:w-1/2">
          <img src="assets/photos/hero.jpg" alt="" />
        </div>
      </div>
    </section>

  </body>
</html>