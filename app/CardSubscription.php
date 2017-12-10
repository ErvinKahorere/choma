<?php

namespace App;

use App\Notifications\CardWasUpdated;
use Illuminate\Database\Eloquent\Model;

class CardSubscription extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function notify($review)
    {
        $this->user->notify(new CardWasUpdated($this->card, $review));
    }
}
