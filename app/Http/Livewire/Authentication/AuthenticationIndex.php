<?php

namespace App\Http\Livewire\Authentication;

use Livewire\Component;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class AuthenticationIndex extends Component
{
    use HandlesPageUpdates;

    public function render()
    {
        return view('livewire.authentication.authentication-index');
    }
}
