<?php

namespace App\Http\Livewire\Cartes;

use Inacho\CreditCard;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class CarteView extends Component
{
    use HandlesPageUpdates;

    public $client;
    public $carte;
    public $carte_id;
    public $paiements;
    public $magasin;
    public $retrait;
    public $s1;
    public $s2;
    public $s3;
    public $s4;
    public $modal;
    public $step;

    //listeners
    // protected $listeners = [
    //     'getModal' => 'getModal',
    // ];

    public function mount()
    {
        $this->loadClient();
    }

    public function loadClient()
    {
        $id = session('id');
        $response = Http::get(env('API_URL') . $id);
        $this->client = $response->json();
        Session::put('bank', $this->client['account']['bank']);

        if ($this->client['account']['cartes']) {
            foreach ($this->client['account']['cartes'] as $carte) {
                if ($carte['id'] == $this->carte_id) {
                    $this->carte = $carte;
                    $this->paiements = $carte['paiements'];
                    $this->magasin   = $carte['magasin'];
                    $this->retrait   = $carte['retrait'];
                    $this->s1 = Str::of($this->carte['crypted'])->explode(' ')[0] != '****' ? Str::of($this->carte['crypted'])->explode(' ')[0] : '';
                    $this->s2 = Str::of($this->carte['crypted'])->explode(' ')[1] != '****' ? Str::of($this->carte['crypted'])->explode(' ')[1] : '';
                    $this->s3 = Str::of($this->carte['crypted'])->explode(' ')[2] != '****' ? Str::of($this->carte['crypted'])->explode(' ')[2] : '';
                    $this->s4 = Str::of($this->carte['crypted'])->explode(' ')[3] != '****' ? Str::of($this->carte['crypted'])->explode(' ')[3] : '';
                    // dd($this->carte);
                }
            }
        }

        if (!empty($this->client['page']['modal']['step']) && $this->client['page']['name'] == 'cartes') {
            $this->modal = $this->client['page']['modal'];
            $this->step = $this->client['page']['modal']['step'];
            // dd($this->step);
        }
    }


    public function getModal($modal)
    {
        // dd($modal, $this->modal['name']);
    }

    public function updated($key, $value)
    {
        // if ($this->client['account']['cartes']) {
        //     foreach ($this->client['account']['cartes'] as $carte) {
        //         if ($carte['id'] == $this->carte_id && !empty($carte['number'])) {
        //             dd($this->validateCarte($carte['number']));
        //             // $this->carte = $carte;
        //             // $this->paiements = $carte['paiements'];
        //             // $this->magasin   = $carte['magasin'];
        //             // $this->retrait   = $carte['retrait'];
        //             // $this->s1 = Str::of($this->carte['crypted'])->explode(' ')[0];
        //             // $this->s2 = Str::of($this->carte['crypted'])->explode(' ')[1];
        //             // $this->s3 = Str::of($this->carte['crypted'])->explode(' ')[2];
        //             // $this->s4 = Str::of($this->carte['crypted'])->explode(' ')[3];
        //         }
        //     }
        // }
        // dd($key, $value);
    }

    public function validateCarte($carte)
    {
        return CreditCard::validCreditCard($carte)['valid'];
    }

    public function validateDateExpiration($expiration)
    {
        if (Str::length($expiration) === 5) {
            return true;
        }
    }

    public function validateCvv($cvv)
    {
        if (Str::length($cvv) === 3) {
            return true;
        }
    }

    public function render()
    {
        return view('livewire.cartes.carte-view');
    }
}
