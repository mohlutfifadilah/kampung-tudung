<?php

namespace App\Notifications;

use App\Channels\Messages\WhatsAppMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Channels\WhatsAppChannel;
use App\Models\Confirm;
use App\Models\Termasuk;
use App\Order;

class OrderProcessed extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $order;

    public function __construct(Confirm $order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return [WhatsAppChannel::class];
    }

    public function toWhatsApp($notifiable)
    {
        $orderUrl = url("/orders/{$this->order->id}");
        $company = 'Acme';
        $deliveryDate = $this->order->created_at->addDays(4)->toFormattedDateString();


        return (new WhatsAppMessage)
            ->content("Your {$company} order of {$this->order->total} has shipped and should be delivered on {$deliveryDate}. Details: {$orderUrl}");
    }
}
