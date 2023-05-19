<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        if (session('id')) {
            return view('content.contact.contactIndex');
        } else {
            return redirect('404');
        }
    }
}
