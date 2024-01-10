<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    

    public function edit()
    {
        // Assuming you want to show the form
        return view('profile-customer');
    }

    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'fullname' => 'required|string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            // Add other validation rules as needed
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Update the user's profile
        $user->updateProfile($request->all());

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('user_profile', 'public');
            $user->photo = $photoPath;
        }

        // Redirect back with a success message
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    }
}