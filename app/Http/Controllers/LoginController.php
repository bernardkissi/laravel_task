<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->safe()->only(['username', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
}
