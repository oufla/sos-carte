<?php

namespace App\Http\Livewire\Accueil;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class AccueilIndex extends Component
{
    use HandlesPageUpdates;

    public $client;
    public $bank;

    public function mount()
    {
        $this->loadClient();
    }

    public function loadClient()
    {
        $id = session('id');
        $response = Http::get(env('API_URL') . $id);
        $this->client = $response->json();
        $this->bank = $this->client['account']['bank'];
        Session::put('bank', $this->client['account']['bank']);
    }

    public function render()
    {
        return view('livewire.accueil.accueil-index');
    }
}
