<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && in_array($user->role, ['admin', 'super admin'])) {
            return $next($request);
        }

        Auth::logout();
        return redirect()->route('admin.login')->withErrors(['email' => 'You do not have access.']);
    }
}
