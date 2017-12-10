<?php

namespace App;

use App\Notifications\NewCardAlert;
use Illuminate\Database\Eloquent\Model;

class MerchantSubscription extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

/*    public function card()
    {
        return $this->belongsTo(Card::class);
    }*/

    public function notify($merchant)
    {

        $this->user->notify(new NewCardAlert($this->card, $merchant));
    }
}
