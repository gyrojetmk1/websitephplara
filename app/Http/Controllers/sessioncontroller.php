<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cachepage;
use Illuminate\Support\Facades\Auth;

class sessioncontroller extends Controller
{
    public function render()
    {
        return view('accounts/login', ['accounts/login' => cachepage::cache('accounts/login')]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('info', 'Logout successful.');
    }

    public function login()
    {
        $attributes = request()->validate([
            'username' => 'required|min:3|max:24',
            'password' => 'required|min:8|max:255'
        ]);

        if (auth()->attempt($attributes))
        {
            return redirect('/')->with("info", "Successfully logged in, welcome back.");
        } else {
            return redirect('/login')->with("info", 'Information doesnt match anything in the database.');
        }
    }
}
