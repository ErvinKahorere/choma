<?php

namespace App\Http\Controllers;

use App\Merchant;
use Illuminate\Http\Request;

class MerchantSubscriptionController extends Controller
{

    public function store(Merchant $merchant)
    {
      //  dd($merchant);
        $merchant->subscribe();

    }

    public function destroy(Merchant $merchant)
    {
        $merchant->unsubscribe();
    }
}
