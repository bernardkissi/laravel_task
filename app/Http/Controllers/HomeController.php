<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;

        $url = User::find($user)->getFirstMediaUrl('profiles', 'profile') ?? null;


        if (Auth::check()) {
            return view('layouts.default', compact('url'));
        }

        return redirect("login")->withSuccess('are not allowed to access');
    }
}
