<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    public function login()
    {
        return view('template/user/pages/login');
    }

    public function register()
    {
        return view('template/user/pages/register');
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
        User::create([
            'name' => strtolower($req->name),
            'email' => strtolower($req->email),
            'password' => Hash::make($req->password),
        ]);
        return redirect('template/user/pages/login')->with('register_success', 'Registration successful. Please login.');
    } catch (\Throwable $th) {
        return redirect()->back()->with('error', 'Registration failed: ' . $th->getMessage());
    }
}

}
