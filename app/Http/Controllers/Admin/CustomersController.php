<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        $customers = User::all();
        return view('admin.customer.index',compact('customers'));
    }

    public function create()
{
    return view('admin.customer.create');
}

public function store(Request $request)
{
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
    ]);

    User::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role ?? 'user',
        'phone' => $request->phone,
        'gender' => $request->gender,
    ]);

    return redirect()->route('customer.index')->with('success', 'Customer created successfully.');
}

public function edit($id)
{
    $customer = User::findOrFail($id);
    return view('admin.customer.edit', compact('customer'));
}

public function update(Request $request, $id)
{
    $customer = User::findOrFail($id);

    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username,'.$customer->id,
        'email' => 'required|string|email|max:255|unique:users,email,'.$customer->id,
    ]);

    $customer->update([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'username' => $request->username,
        'email' => $request->email,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'role' => $request->role,
    ]);

    return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
}

public function destroy($id)
{
    $customer = User::findOrFail($id);
    $customer->delete();
    return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
}


}
