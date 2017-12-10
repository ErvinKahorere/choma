<?php

namespace App\Listeners;

use App\Events\CardCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifySubscribers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CardCreated  $event
     * @return void
     */
    public function handle(CardCreated $event)
    {
        $event->card->subscribers->forEach(function ($subscriber) {
            //    var_dump($event->card['card_product_name'] . ' was published to the forum.');
        });

        var_dump($event->card['card_product_name'] . ' was published to the forum.');
    }
}
