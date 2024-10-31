<?php

namespace App\Events;

use App\Models\BRT;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BRTNotificationEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $brt;

    public function __construct(BRT $brt) { $this->brt = $brt; }

    public function broadcastOn() { return new Channel('brt-channel'); }

    public function broadcastAs() { return 'BRTNotification'; }
}
