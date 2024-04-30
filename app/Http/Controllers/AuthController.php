<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function tampilRegister()
    {
        return view('auth.register');
    }

    public function tampilLogin()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('index');
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($login)){
            return redirect()->route('index');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login');
    }
}
