<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Traits\HandlesPageUpdates;

class OrdersList extends Component
{
    use HandlesPageUpdates;

    public $client;
    public $orders;
    public $ordersByDay;


    public function mount()
    {
        $this->loadClient();
    }

    public function loadClient()
    {
        $id = session('id');
        $response = Http::get(env('API_URL') . $id);
        $this->client = $response->json();
        $this->orders = $this->client['account']['orders'];

        $this->ordersByDay = array_group_by($this->orders, "order_date");
        // dd($this->ordersByDay);
        Session::put('bank', $this->client['account']['bank']);
    }

    public function render()
    {
        return view('livewire.orders.orders-list');
    }
}
