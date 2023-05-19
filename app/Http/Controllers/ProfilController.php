<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        if (session('id')) {
            return view('content.profil.profil');
        } else {
            return redirect('404');
        }
    }
}
