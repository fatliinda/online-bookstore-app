<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('partials.flash')

<div>
  <div class="container mx-auto px-4 py-8">
    <div class="flex flex-wrap -mx-4">
      <!-- Product Images -->
      <div class="w-full aspect-h-1 h-80 md:w-1/2 px-4 mb-8">
        <img src="{{ asset($book->image_path) }}" alt="Product"
                    class="w-full h-full  object-contain rounded-lg  mb-4" id="mainImage">
       
      </div>

      <!-- Product Details -->
      <div class="w-full md:w-1/2 px-4">
        <h2 class="text-3xl font-bold mb-2">{{$book->title}}</h2>
        <p class="text-gray-600 mb-4">{{$book->author->name}}</p>
        <div class="mb-4">
          <span class="text-2xl font-bold mr-2">{{$book->price}}$</span>
        
        </div>
        
        <p class="text-gray-700 mb-6">{{$book->description}}</p>

        <div class="mb-6">
          <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
          <input type="number" id="quantity" name="quantity" min="1" value="1"
                        class="w-12 text-center rounded-md border-gray-300  shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="flex space-x-4 mb-6">
        <form action="{{ route('cart-add', $book->id) }}" method="POST" class="mt-4">
        @csrf
          <button type='submit'class="bg-brightRed flex gap-2 items-center text-white px-6 py-2 rounded-md  hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        Add to Cart
                    </button>
        </form>
          <button
                        class="bg-gray-200 flex gap-2 items-center  text-gray-800 px-6 py-2 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        Wishlist
                    </button>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-2">Key Features:</h3>
          <ul class="list-disc list-inside text-gray-700">
            <li>Industry-leading noise cancellation</li>
            <li>30-hour battery life</li>
            <li>Touch sensor controls</li>
            <li>Speak-to-chat technology</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
    function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
  </script>
</div>
</html>
