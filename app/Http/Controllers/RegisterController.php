<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255'
        ]);

        $user = User::create($attributes);
        $user->image = 'user.jpg';

        // log the user in
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
