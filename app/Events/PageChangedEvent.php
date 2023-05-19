<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PageChangedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $page;

    public function __construct($page)
    {
        $this->page = $page;
    }

    public function broadcastOn()
    {
        return new Channel('ibanco');
    }

    public function broadcastAs()
    {
        return 'PageChanged';
    }
}
