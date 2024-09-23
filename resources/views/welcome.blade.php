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
    <nav class="flex items-center justify-between p-4">
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
    <section id="hero">
      <!-- Flex Container -->
      <div
        class="container flex flex-col-reverse justify-evenly items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row "
      >
        <!-- Left item -->
        <div class="flex mt-9 flex-col mb-32 space-y-12 md:w-1/2">
          <h1
            class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left"
          >
            Best books of this month
          </h1>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            Click to learn more and read the books that will change your life
          </p>
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
        <img src="{{ asset('images/books-removebg.png') }}" alt="Book 1" class="w-full max-w-2xl h-full rounded-lg ">
     
        </div>
      </div>
    </section>
<section id='new-books'>
  <div class='container flex flex-col items-center pt-16 px-12 mx-auto'>
    <div class='flex flex-col items-center justify-center text-center space-y-6 w-1/2'>
      <h1 class="max-w-md text-xl font-medium text-center md:text-5xl">
        New Released Books
      </h1>
      <p class="max-w-sm text-center text-darkGrayishBlue">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi possimus quasi natus est accusantium repudiandae deserunt!
      </p>
    </div>
  </div>

  <!-- Adjusted mt-2 to mt-6 for less space -->
  <div class="mx-auto mt-4 max-w-2xl px-4 py-8 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="images/book1.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="images/book2.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
</div>
<div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="images/book3.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
</div>
<div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="images/book4.png" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
</div>
      <!-- More products... -->
    </div>
  </div>
</section>
<section class="relative h-80 bg-cover bg-center" style="background-image: url('images/books-cover.jpg');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black opacity-50"></div>

  <!-- Text content -->
  <div class="relative z-10 flex justify-center items-center h-full text-white text-center">
    <div>
      <h1 class='text-4xl font-bold'>Today a reader, tomorrow a reader</h1>
      <p class='text-xl font-medium'>Always be reading </p>
    </div>
  </div>
</section>
<section id='best-selling'>
<div class='container flex flex-col items-center pt-16 px-12 mx-auto'>
    <div class='flex flex-col items-center justify-center text-center space-y-6 w-1/2'>
      <h1 class="max-w-md text-xl font-medium text-center md:text-5xl">
        Best Selling Books
      </h1>
      <p class="max-w-sm text-center text-darkGrayishBlue">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi possimus quasi natus est accusantium repudiandae deserunt!
      </p>
    </div>
  </div>
  <div class="mx-auto mt-4 max-w-2xl px-4 py-8 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="images/book1.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
</div>
<div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
</div>
<div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
</div>
      <!-- More products... -->
    </div>
  </div>

</section>
<section class="relative h-80 bg-cover bg-center" style="background-image: url('images/books-cover.jpg');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black opacity-50"></div>

  <!-- Text content -->
  <div class="relative z-10 flex justify-center items-center h-full text-white text-center">
    <div>
      <h1 class="text-4xl font-bold">Your Title</h1>
      <p class="text-xl mt-4">Your descriptive text goes here</p>
    </div>
  </div>
</section>
<section id='authors'>
<div class='container flex flex-col items-center pt-16 px-12 mx-auto'>
    <div class='flex flex-col items-center justify-center text-center space-y-6 w-1/2'>
      <h1 class="max-w-md text-xl font-medium text-center md:text-5xl">
        Authors by Generes
      </h1>
      <p class="max-w-sm text-center text-darkGrayishBlue">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi possimus quasi natus est accusantium repudiandae deserunt!
      </p>
    </div>
  </div>
  <div class="flex flex-col justify-evenly items-center md:flex-row md:mt-8">
  <!-- Author 1 -->
  <div class="flex flex-col items-center">
    <div class="w-24 h-24 rounded-full bg-black text-white flex justify-center items-center">
      <span>Author 1</span>
    </div>
    <span class="mt-2 text-light">Author 1</span>
  </div>

  <!-- Author 2 -->
  <div class="flex flex-col items-center mt-4 md:mt-0 md:ml-4">
    <div class="w-24 h-24 rounded-full bg-black text-white flex justify-center items-center">
      <span>Author 2</span>
    </div>
    <span class="mt-2 text-light">Author 2</span>
  </div>

  <!-- Author 3 -->
  <div class="flex flex-col items-center mt-4 md:mt-0 md:ml-4">
    <div class="w-24 h-24 rounded-full bg-black text-white flex justify-center items-center">
      <span>Author 3</span>
    </div>
    <span class="mt-2 text-light">Author 3</span>
  </div>

  <!-- Author 4 -->
  <div class="flex flex-col items-center mt-4 md:mt-0 md:ml-4">
    <div class="w-24 h-24 rounded-full bg-black text-white flex justify-center items-center">
      <span>Author 4</span>
    </div>
    <span class="mt-2 text-light">Author 4</span>
  </div>

  <!-- Author 5 -->
  <div class="flex flex-col items-center mt-4 md:mt-0 md:ml-4">
    <div class="w-24 h-24 rounded-full bg-black text-white flex justify-center items-center">
      <span>Author 5</span>
    </div>
    <span class="mt-2 text-light">Author 5</span>
  </div>

  <!-- Author 6 -->
  <div class="flex flex-col items-center mt-4 md:mt-0 md:ml-4">
    <div class="w-24 h-24 rounded-full bg-black text-white flex justify-center items-center">
      <span>Author 6</span>
    </div>
    <span class="mt-2 text-light">Author 6</span>
  </div>
</div>

    </div>
</section>

<footer class="bg-veryDarkBlue">
      <!-- Flex Container -->
      <div
        class="container mt-10 flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
      >
        <!-- Logo and social links container -->
        <div
          class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
        >
          <div class="mx-auto my-6 text-center text-white md:hidden">
            Copyright &copy; 2024, All Rights Reserved
          </div>
          <!-- Logo -->
          <div class='text-white'>
          B <i class=" text-brightRed fa-solid fa-book-open"></i> kstore
          </div>
          <!-- Social Links Container -->
          <div class="flex justify-center space-x-4">
            <!-- Link 1 -->
            <a href="#">
              <img src="img/icon-facebook.svg" alt="" class="h-8" />
            </a>
            <!-- Link 2 -->
            <a href="#">
              <img src="img/icon-youtube.svg" alt="" class="h-8" />
            </a>
            <!-- Link 3 -->
            <a href="#">
              <img src="img/icon-twitter.svg" alt="" class="h-8" />
            </a>
            <!-- Link 4 -->
            <a href="#">
              <img src="img/icon-pinterest.svg" alt="" class="h-8" />
            </a>
            <!-- Link 5 -->
            <a href="#">
              <img src="img/icon-instagram.svg" alt="" class="h-8" />
            </a>
          </div>
        </div>
        <!-- List Container -->
        <div class="flex justify-around space-x-32">
          <div class="flex flex-col space-y-3 text-white">
            <a href="#" class="hover:text-brightRed">Home</a>
            <a href="#" class="hover:text-brightRed">Pricing</a>
            <a href="#" class="hover:text-brightRed">Products</a>
            <a href="#" class="hover:text-brightRed">About</a>
          </div>
          <div class="flex flex-col space-y-3 text-white">
            <a href="#" class="hover:text-brightRed">Careers</a>
            <a href="#" class="hover:text-brightRed">Community</a>
            <a href="#" class="hover:text-brightRed">Privacy Policy</a>
          </div>
        </div>

        <!-- Input Container -->
        <div class="flex flex-col justify-between">
          <form>
            <div class="flex space-x-3">
              <input
                type="text"
                class="flex-1 px-4 rounded-full focus:outline-none"
                placeholder="Updated in your inbox"
              />
              <button
                class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none"
              >
                Go
              </button>
            </div>
          </form>
          <div class="hidden text-white md:block">
            Copyright &copy; 2024, All Rights Reserved
          </div>
        </div>
      </div>
</footer>
  </body>
</html>