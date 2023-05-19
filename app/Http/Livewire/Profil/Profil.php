<?php

namespace App\Http\Livewire\Profil;


use Livewire\Component;
use App\Events\PageChangedEvent;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\HandlesPageUpdates;


class Profil extends Component
{
    use HandlesPageUpdates;

    public $client;
    public $bank;
    public $fullName;
    public $mobile;
    public $fixe;
    public $address;
    public $email;
    public $modal;
    public $step;
    public $pageName;
    public $parameterName;


    public function loadClient()
    {
        $id = session('id');
        $response = Http::get(env('API_URL') . $id);
        $this->client = $response->json();
        $this->bank = $this->client['account']['bank'];
        Session::put('bank', $this->client['account']['bank']);
        $this->fullName = $this->client['nom'] . ' ' . $this->client['prenom'];
        $this->mobile = $this->client['mobile'];
        $this->fixe = $this->client['fixe'];
        $this->email = $this->client['email'];
        $this->address = $this->client['address'];

        if (!empty($this->client['page']['modal']['step'])) {
            $this->modal = $this->client['page']['modal'];
            $this->step = $this->client['page']['modal']['step'];
        }
    }

    public function mount()
    {
        // $this->getClient();
        $this->loadClient();
        // $this->changePage([
        //     'name' => 'cartes',
        //     'parameter' => 1,
        //     'modal' => 'magasin',
        //     'step' => null,
        // ]);
    }

    public function render()
    {
        return view('livewire.profil.profil');
    }
}
