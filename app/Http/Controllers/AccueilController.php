<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        if (session('id')) {
            return view('content.accueil.accueil');
        } else {
            return redirect('404');
        }
    }
}
