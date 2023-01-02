<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class authController extends Controller
{
    //

    public function index()
    {
        return view('register');
    }

    public function Register(Request $request)
    {
        $data = $request->request->all();
        $img = Storage::disk('public')->put('img', $request->file('image'));

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'image' => $img,
            'password' => bcrypt($data['password']),
        ]);

        return redirect('/login')->with('success');
    }

    public function LoginUser(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Retrieve the user with the provided email
        $user = User::where('email', $request->email)->first();

        // Check if the provided password matches the hashed password in the database
        if (Hash::check($request->password, $user->password)) {
            // The passwords match, login the user and redirect to the home page
            auth()->login($user);
            return redirect('/')->with('success', 'Login Success');
        } else {
            // The passwords do not match, redirect back to the login page with an error message
            return redirect()->route('login')->with('error', 'Login Failed');
        }
    }
}
