@extends('layouts.admin') <!-- Extend the admin layout -->

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Users</h1>

    <!-- Add User Button -->
    <div class="flex justify-end items-center m-4">
        <a href="{{ route('admin-users-create') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow">Add User</a>
    </div>

    <!-- Users Table -->
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Role</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->id }}</td>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">{{ $user->getRoleNames()->first() }}</td>
                <td class="border px-4 py-2">
                    <!-- Edit Button -->
                    <a href="{{ route('admin-users-edit', $user->id) }}" class="text-blue-600 hover:underline">Edit</a>

                    <!-- Delete Button -->
                    <form action="{{ route('admin-users-destroy', $user->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline ml-4">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
@endsection
