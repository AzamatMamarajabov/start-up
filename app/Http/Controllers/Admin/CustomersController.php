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


}