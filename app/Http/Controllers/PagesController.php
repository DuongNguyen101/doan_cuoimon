<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    public function login()
    {
        $categories = Categories::all();
        return view('template/user/pages/login', compact('categories'));
    }

    public function postlogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Please enter email.',
            'email.email' => 'Email is not in correct format.',
            'password.required' => 'Please enter password.',
            'password.min' => 'Password must have at least :min characters.',
        ]);

        $user = User::where('email', $req->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email does not exist'])->withInput();
        }

        if ($user->role !== 'user') {
            return back()->withErrors(['email' => 'You are not authorized to login here.'])->withInput();
        }

        if (!Hash::check($req->password, $user->password)) {
            return back()->withErrors(['password' => 'Password is incorrect'])->withInput();
        }

        if (!$user->hasVerifiedEmail()) {
            return back()->with('need_verify', true)->withInput();
        }

        Auth::guard('web')->login($user);
        return redirect()->intended('template/user/home/index');
    }

    public function register()
    {
        $categories = Categories::all();
        return view('template/user/pages/register', compact('categories'));
    }

    public function postregister(Request $req)
    {
        $req->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:users,name',
                'regex:/^[a-zA-Z0-9]+$/',
            ],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.unique' => 'Name already exists.',
            'email.unique' => 'Email is already in use.',
            'name.required' => 'Please enter name.',
            'email.required' => 'Please enter email.',
            'password.required' => 'Please enter password.',
            'password.min' => 'Password must have at least :min characters.',
        ]);
        try {
            $user = User::create([
                'name' => strtolower($req->name),
                'email' => strtolower($req->email),
                'password' => Hash::make($req->password),
                'role' => 'user',
                'image' => 'vietnam.png',
                'address_id' => 1,
            ]);
            $user->sendEmailVerificationNotification();
            return redirect('template/user/pages/login')->with('register_success', 'Registered successfully and check your email.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Registration failed: ' . $th->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('template/user/pages/login')->with('success', 'You have been logged out.');
    }
}
