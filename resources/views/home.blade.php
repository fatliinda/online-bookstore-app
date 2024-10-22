@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
@include('partials.flash')

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
@endsection









   