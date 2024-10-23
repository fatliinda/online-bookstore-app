<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalSales = Order::sum('total_price'); 
        $totalOrders = Order::count();
        $totalProducts = Book::count();
        $totalUsers = User::role('user')->count();
        return view('admin.admin-dashboard', compact('totalSales', 'totalOrders', 'totalProducts', 'totalUsers'));
    }
    public function userIndex()
    {
        $users = User::paginate(10);  
        return view('admin.users.index', compact('users'));
    }
    public function userCreate()
{
    return view('admin.users.create');  
}
public function userStore(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|string|in:admin,user'  // Example role handling
    ]);

    // Create the user
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),  
    ]);

    $user->assignRole($validatedData['role']);

    return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
}

    public function userEdit($id)
    {
        $user = User::findOrFail($id);
        $roles = \Spatie\Permission\Models\Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }

    public function userUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin-users-index')->with('success', 'User updated successfully.');
    }

    public function userDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
