<?php

namespace App\Http\Controllers;


use App\Card;
use Illuminate\Http\Request;

class CardSubscriptionController extends Controller
{
    public function store($channelId, Card $card)
    {
        $card->subscribe();
    }

    public function destroy($channelId, Card $card)
    {
        $card->unsubscribe();
    }
}
