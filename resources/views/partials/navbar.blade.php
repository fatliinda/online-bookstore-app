<nav class="flex items-center justify-between p-4">
  <div class="flex-shrink-0 text-xl font-bold">
    B <i class="text-brightRed fa-solid fa-book-open"></i> kstore
  </div>
  <div class="hidden md:flex space-x-6">
    <a href="{{route('index')}}" class="hover:text-gray-400">Home</a>
    <a href="#" class="hover:text-gray-400">Books</a>
    <a href="#" class="hover:text-gray-400">Authors</a>
    <a href="#" class="hover:text-gray-400">Contact</a>
  </div>
  <a href="{{ route('cart-show') }}">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
  </a>
</nav>
