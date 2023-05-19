<?php

namespace App\Http\Livewire\Cartes;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class CartesList extends Component
{
    use HandlesPageUpdates;

    public $client;
    public $cartes;


    public function mount()
    {
        $this->loadClient();
    }

    public function loadClient()
    {
        $id = session('id');
        $response = Http::get(env('API_URL') . $id);
        $this->client = $response->json();
        $this->cartes = $this->client['account']['cartes'];
        Session::put('bank', $this->client['account']['bank']);
    }

    public function render()
    {
        return view('livewire.cartes.cartes-list');
    }
}
