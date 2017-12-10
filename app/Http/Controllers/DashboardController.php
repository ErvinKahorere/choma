<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Merchant;
use App\Card;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $merchants = User::find(Auth::id())->merchants;
        $cards = User::find(Auth::id())->cards;
        
     //   $merchants = Merchant::all();
        
       // $card = auth()->user()->Card::all();

      //  $cards = Card::all();
        
        return view('dashboard', compact('user', 'card', 'cards', 'merchants'));
    }
}

