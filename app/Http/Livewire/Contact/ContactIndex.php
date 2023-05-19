<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class ContactIndex extends Component
{
    use HandlesPageUpdates;

    public $client;
    public $agence;
    public $bank;
    public $conseiller;


    public function mount()
    {
        $this->loadClient();
    }

    public function loadClient()
    {
        $id = session('id');
        $response = Http::get(env('API_URL') . $id);
        $this->client = $response->json();
        $this->agence = $this->client['account']['agence'];
        $this->bank = $this->client['account']['bank'];
        $this->conseiller = $this->client['account']['conseiller'];
        Session::put('bank', $this->client['account']['bank']);
    }

    public function render()
    {
        return view('livewire.contact.contact-index');
    }
}
