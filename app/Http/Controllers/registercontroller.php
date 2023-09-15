<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use App\Models\cachepage;
use App\Models\User;
use App\Http\Controllers\sessioncontroller;
use Illuminate\Support\Facades\Auth;


class registercontroller extends Controller
{
    public function render()
    {
        return view('accounts/register', ['accounts/register' => cachepage::cache('accounts/register')]);
    }

    public function resgister()
    {
        $attributes = request()->validate([
            'username' => 'required|min:3|max:24',
            'email' => 'required|email|max:200',
            'password' => 'required|min:8|max:255'
        ]);

            
        try{
            $createduser = User::create($attributes);
        } catch(\Illuminate\Database\QueryException $ex) {
            if ($ex->getCode() == 23000){
                return redirect('/register')->with('info', 'Username or email is already in use.');
            }
        }
            
        auth()->login($createduser);
        session()->flash("info", "Account successfully created.");

        return redirect('/'); // Todo: fix database being queryed 3 times instead of 1
            
    }
}
