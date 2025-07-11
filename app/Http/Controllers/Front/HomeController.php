<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('front.index', compact('user'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('front.profile', compact('user'));
    }

     public function editProfile()
    {
        $user = Auth::user(); 
        return view('front.edit-profile', compact('user')); 
    }
}
