<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;
use App\Review;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function store(Card $card)
    {

  $card->addReview([
    
    'body' => request('body'), 
    'star' => request('star'),
  //  'card_id' => $card->id,
    'user_id' => auth()->id()
    ]); 
    
    return back()->with('flash', 'Thanks for your review!');
    }

}
