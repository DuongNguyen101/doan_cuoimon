<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('login/admin/index');
    }


    public function postloginadmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Auth::guard('admin')->user();

            if (in_array($admin->role, ['admin', 'super admin'])) {
                return redirect('/template/admin/dashboard');
            }

            Auth::guard('admin')->logout();
            return back()->withErrors(['email' => 'You do not have access to the admin page.']);
        }

        return back()->withErrors(['email' => 'Incorrect email or password.']);
    }

    public function logout()
    {
        return view('login/admin/logout');
    }

    public function postlogoutadmin(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Log out successfully!');
    }
}
