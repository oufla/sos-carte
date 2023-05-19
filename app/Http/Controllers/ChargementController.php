<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargementController extends Controller
{
    public function index()
    {
        if (session('id')) {
            return view('content.chargement.chargementIndex');
        } else {
            return redirect('404');
        }
    }
}
