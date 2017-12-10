<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CardCreated implements ShouldBroadcast
{
    
    
    
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $card;
    
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($card)
    {
        $this->card = $card;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
      //  return new PrivateChannel('channel-name');
        return new Channel('cards');

    }

    public function broadcastWith() {
        return [

         //   'title' => $this->card->card_product_name,

            'title' => $this->card,

        //    'title' => 'Yo',
        ];
    }
}
