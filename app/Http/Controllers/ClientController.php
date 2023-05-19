<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public $client;

    public function show($id)
    {
        $response = Http::get(env('API_URL') . $id);

        if ($response->json()) {
            $this->client = $response->json();
            Session::put('id', $id);
            Session::put('bank', $this->client['account']['bank']);
            return redirect('profil');
        } else {
            return redirect('404');
        }
    }
}
