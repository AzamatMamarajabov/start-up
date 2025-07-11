<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class ProfileController extends Controller
{
        

    public function update(Request $request)
    {
        $user = Auth::user();

        // Text fieldlarni yangilash
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->gender = $request->input('gender');
        $user->biography = $request->input('biography');

        // Profile image
        if ($request->hasFile('profile_image')) {
            $profile = $request->file('profile_image');
            $profileName = time().'_profile.'.$profile->getClientOriginalExtension();
            $profile->move(public_path('uploads/profiles'), $profileName);
            $user->profile_image = 'uploads/profiles/' . $profileName;
        }

        // Cover image
        if ($request->hasFile('cover_image')) {
            $cover = $request->file('cover_image');
            $coverName = time().'_cover.'.$cover->getClientOriginalExtension();
            $cover->move(public_path('uploads/covers'), $coverName);
            $user->cover_image = 'uploads/covers/' . $coverName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Old password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully!');
        
    }
}
