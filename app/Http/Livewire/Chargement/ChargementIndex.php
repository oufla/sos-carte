<?php

namespace App\Http\Livewire\Chargement;

use Livewire\Component;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class ChargementIndex extends Component
{
    use HandlesPageUpdates;

    public function render()
    {
        return view('livewire.chargement.chargement-index');
    }
}
