<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class OrderView extends Component
{
    use HandlesPageUpdates;

    public $client;
    public $order;
    public $order_id;
    public $modal;
    public $step = [];

    public function loadClient()
    {
        $id = session('id');
        $response = Http::get(env('API_URL') . $id);
        $this->client = $response->json();
        Session::put('bank', $this->client['account']['bank']);

        if ($this->client['account']['orders']) {
            foreach ($this->client['account']['orders'] as $order) {
                if ($order['id'] == $this->order_id)
                    $this->order = $order;
            }
        }

        if (!empty($this->client['page']['modal']['step']) && $this->client['page']['name'] == 'orders') {
            $this->modal = $this->client['page']['modal'];
            $this->step = $this->client['page']['modal']['step'];
        }
    }

    public function mount()
    {
        $this->loadClient();
    }

    public function render()
    {
        return view('livewire.orders.order-view');
    }
}
