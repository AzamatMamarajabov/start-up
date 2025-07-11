<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function showRegisterForm() {
        return view('front.auth.register');
    }

    public function register(Request $request) {
       
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('profile');
    }

    public function showLoginForm() {
        return view('front.auth.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'login' => 'required|string',
        'password' => 'required|string',
    ]);

    $login_type = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    if (Auth::attempt([$login_type => $request->login, 'password' => $request->password])) {
        $request->session()->regenerate();
        return redirect()->intended('profile');
    }

    return back()->withErrors([
        'login' => 'Login yoki parol noto‘g‘ri!',
    ]);
}


    public function logout(Request $request)
{
    Auth::logout(); // foydalanuvchini tizimdan chiqarish
    $request->session()->invalidate(); // sessionni bekor qilish
    $request->session()->regenerateToken(); // csrf tokenni yangilash

    return redirect('/'); // yoki route('home')
}

}
