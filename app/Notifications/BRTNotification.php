<?php

namespace App\Notifications;

use App\Models\BRT;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class BRTNotification extends Notification
{
    use Queueable;
    private $brt;

    public function __construct(BRT $brt) { $this->brt = $brt; }

    public function toArray($notifiable) {
        return [
            'message' => 'BRT updated: ' . $this->brt->brt_code,
            'reserved_amount' => $this->brt->reserved_amount,
            'status' => $this->brt->status,
        ];
    }
}
