<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function register(RegisterRequest $request)
    {
        $payload = $request->validated();

        User::create([
            'name' => $payload['name'],
            'username' => $payload['username'],
            'email' => $payload['email'],
            'password' => bcrypt($payload['password']),
            'nationality' => $payload['nationality'],
            'telephone' => $payload['telephone'],
            'birth_date' => $payload['birth_date'],
            'info' => $payload['info']
        ]);

        return redirect("login")->withSuccess('You have successfully created an account');
    }
}
