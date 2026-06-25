<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function StoreUserInfo(Request $request){   // Registration
        $request->validate([
            'name'      => 'required|string|max:255',   // User table column => required validation
            'email'     => 'required|email|unique:users',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*?&]/',
            ],

            'user_type' => 'required|in:student,teacher,developer,blogger,freelancer,other',
            'agree_terms'=>'accepted'
        ]);


        User::create([
            'name'      => $request->name,  //column -> value receive by input's name attribute
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'user_type' => $request->user_type,
        ]);

        return redirect()->route('login')->with('success', 'Registered Successfully! You can now log in');
    }

    public function login(){
        return view('auth.login', );
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password'  => 'required|min:8',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', 'Logged in successfully');
        }
        return back()->withErrors([
            'email' => 'Provided credentials do not match our records!',
        ])->onlyInput('email');

    }
}
