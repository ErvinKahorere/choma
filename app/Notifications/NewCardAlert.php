<?php

namespace App\Notifications;

use App\Card;
use App\Merchant;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewCardAlert extends Notification
{
    use Queueable;



    public $card;

    public $merchant;

    /**
     * Create a new notification instance.
     *
     * @return void
     */


    public function __construct($card, $merchant)
    {
       $this->card = $card;
       $this->merchant = $merchant;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
       // return ['database'];

         return ['mail', 'database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)

    {

        $merchant_name = $this->merchant->merchant_name;
   //     $merchant_name = $this->merchant->merchant_name;
        $card_product_name = $this->merchant->card_product_name;
        $path = url('/cards/' . $this->merchant->channel->name . '/' . $this->merchant->id);

        $card_product_description = $this->merchant->card_product_description;

        return (new MailMessage)
                    ->subject('New Deal Alert | ' . $card_product_name . ' | ' . $merchant_name)

           // ->subject('New Deal | by ' . $merchant_name . '|' . $card_product_name)
                    ->line('A new deal card from a Merchant you are subscribed to was posted with Choma')
             //
                    ->line($card_product_description)
                   ->action('View Deal', $path)
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {

     //   $merchant_name = $this->card->merchant->merchant_name;
    //    $card_product_name = $this->card->card_product_name;
  //      $path = url('/cards/' . $this->card->channel->name . '/' . $this->id);


        $merchant_name = $this->merchant->merchant_name;
        //     $merchant_name = $this->merchant->merchant_name;
        $card_product_name = $this->merchant->card_product_name;
        $path = url('/cards/' . $this->merchant->channel->name . '/' . $this->merchant->id);

        $card_product_description = $this->merchant->card_product_description;



        return [
            'message' =>  $card_product_name . ' | ' . $merchant_name,
            'link' => $path
        ];
    }


    public function toBroadcast($notifiable)
    {

        //   $merchant_name = $this->card->merchant->merchant_name;
        //    $card_product_name = $this->card->card_product_name;
        //      $path = url('/cards/' . $this->card->channel->name . '/' . $this->id);


        $merchant_name = $this->merchant->merchant_name;
        //     $merchant_name = $this->merchant->merchant_name;
        $card_product_name = $this->merchant->card_product_name;
        $path = url('/cards/' . $this->merchant->channel->name . '/' . $this->merchant->id);

        $card_product_description = $this->merchant->card_product_description;



        return new BroadcastMessage([
            'message' =>  $card_product_name . ' | ' . $merchant_name,
            'link' => $path
        ]);
    }
}
