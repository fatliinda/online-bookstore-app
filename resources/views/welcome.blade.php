<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('partials.flash')
    <!-- Navbar -->
    <nav class="flex items-center justify-between p-4">
  <!-- Logo Section -->
  <div class="flex-shrink-0 text-xl font-bold">
  B <i class=" text-brightRed fa-solid fa-book-open"></i> kstore
  </div>

  <!-- Navigation Links -->
  <div class="hidden md:flex space-x-6">
    <a href="#" class="hover:text-gray-400">Dashboard</a>
    <a href="#" class="hover:text-gray-400">About</a>
    <a href="#" class="hover:text-gray-400">Services</a>
    <a href="#" class="hover:text-gray-400">Contact</a>
  </div>

 
  <a href="{{ route('cart-show') }}">
  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
</a>
</nav>


@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <!-- Hero Section -->
    <div class="bg-pinkBg py-20">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 lg:w-2/3">
                <h1 class="text-4xl md:text-6xl lg:text-7xl text-white font-bold mb-6">
                    For all your <br class="hidden md:block" />
                    <span class="text-brightRed">reading</span> needs
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl text-gray-400 mb-8">
                    Expand your mind reading a book.
                </p>
                <div class="flex gap-2">
                    <a href="#" class="bg-brightRed hover:bg-red-500 text-white font-bold py-3 px-6 rounded-md">Get
                        Started
                    </a>
                    <a href="#" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-md">Learn
                        More
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 lg:w-1/3 mt-8 md:mt-0">
                <img src="images/bookshelves.png" alt="Hero Image" class="rounded-lg " />
            </div>
        </div>
    </div>
</div>
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
    
      @foreach($newBooks as $newbook)
      <div class="group relative flex flex-col h-full">
    <!-- Book Image -->
    <a href="{{ route('book-show', $newbook->id) }}">
    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <img src="{{$newbook->image_path}}" alt="Image of {{$newbook->title}}" class="h-full w-full object-contain object-center lg:h-full lg:w-full">
    </div>
</a>
    <!-- Book Details with Flex-grow to make the title and author take equal space -->
    <div class="mt-4 flex-grow flex flex-col justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                {{$newbook->title}}
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{$newbook->author->name}}</p>
        </div>
        <div class='block mb-4'>
            <p class="text-sm font-medium text-gray-900">{{$newbook->price}}$</p>
        </div>
    </div>

    <!-- Add to Cart Button -->
    <form action="{{ route('cart-add', $newbook->id) }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="bg-brightRed text-white text-lg w-full py-2 hover:bg-red-600 transition">
            Add to Cart
        </button>
    </form>
</div>

      @endforeach
      
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
      @foreach($books as $book)
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{$book->image_path}}" alt="Front of men's Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{$book->title}}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{$book->price}}</p>
          </div>
          <p class="text-sm font-medium text-gray-900">{{$book->author->name}}</p>
        </div>
        <button class='text-white bg-brightRed text-lg w-full py-2 mt-4'>
        Add to Cart
    </button>
      </div>
      @endforeach
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
        Authors
      </h1>
      <p class="max-w-sm text-center text-darkGrayishBlue">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi possimus quasi natus est accusantium repudiandae deserunt!
      </p>
    </div>
  </div>
  <div class="flex flex-col justify-evenly items-center md:flex-row md:mt-8">
  <!-- Author-->
   @foreach($authors as $author)
  <div class="flex flex-col items-center mt-4 md:mt-0 md:ml-4">
  <div class="w-24 h-24 rounded-full bg-black flex justify-center items-center overflow-hidden">
    <img src='{{$author->image_path}}' class="w-full h-full object-cover">
  </div>
  <span class="mt-2 text-light">{{$author->name}}</span>
</div>
@endforeach
  
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
            <a href="#" class="hover:text-brightRed">Dashboard</a>
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