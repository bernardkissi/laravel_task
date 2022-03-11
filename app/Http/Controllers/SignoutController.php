<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SignoutController extends Controller
{
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
