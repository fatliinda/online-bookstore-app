@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Add New Book</h1>

    <form action="{{ route('admin-books-store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="border rounded-md w-full p-2" required>
        </div>
        <div class="mb-4">
            <label for="author_id" class="block text-gray-700">Author</label>
            <select name="author_id" id="author_id" class="border rounded-md w-full p-2" required>
                <!-- Populate authors dynamically -->
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
</div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Book</button>
    </form>
</div>
@endsection
