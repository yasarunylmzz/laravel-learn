<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validate
       $attributes = request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'confirmed'], // password_confirmation
        ]);

        //create the user

       $user = User::create($attributes);

        //log in

        Auth::login($user);
        //redirect somewhere

        return redirect('/jobs');

    }
}
