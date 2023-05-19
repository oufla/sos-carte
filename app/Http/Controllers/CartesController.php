<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartesController extends Controller
{
    public function index()
    {
        if (session('id')) {
            return view('content.cartes.cartesList');
        } else {
            return redirect('404');
        }
    }

    public function show($carte_id)
    {
        if (session('id')) {
            return view('content.cartes.carteView', compact('carte_id'));
        } else {
            return redirect('404');
        }
    }

}
