<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserInfoController extends Controller
{

    public function update(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'regex:/^[0-9]{10}$/'],
            'province' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'street' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'phone.required' => 'Please enter your phone number.',
            'phone.regex' => 'Phone number must be exactly 10 digits.',
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/avatar'), $filename);
            $user->image = $filename;
        }

        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        $user->phone = $request->phone;
        $user->save();

        $user->address()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'city' => $request->province,
                'district' => $request->district,
                'street' => $request->street,
            ]
        );

        return redirect()->back()->with('success', 'Update information successfully!');
    }
}
