@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Books Management</h1>

    <!-- Books Table -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="flex justify-end items-center m-4">
    <a href="{{ route('admin-books-create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add New Book</a>
</div>

        <table class="min-w-full">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-4 text-left text-gray-600 font-semibold">Title</th>
                    <th class="py-3 px-4 text-left text-gray-600 font-semibold">Author</th>
                    <th class="py-3 px-4 text-left text-gray-600 font-semibold">Quantity</th>
                    <th class="py-3 px-4 text-left text-gray-600 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($books as $book)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $book->title }}</td>
                        <td class="py-3 px-4">{{ $book->author->name }}</td>
                        <td class="py-3 px-4">{{ $book->count() }}</td>
                        <td class="py-3 px-4">
                            <a href="{{ route('admin-books-edit', $book->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('admin-books-destroy', $book->id) }}" method="POST" class="inline-block ml-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
