<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index()
    {
        if (session('id')) {
            return view('content.authentication.authenticationIndex');
        } else {
            return redirect('404');
        }
    }
}
