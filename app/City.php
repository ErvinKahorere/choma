<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   /* public function cards()
        {
            return $this->belongsToMany(Card::class);
        }
        */

     public function cards()
         {
             return $this->hasManyThrough(Card::class, Merchant::class, 'merchant_city');
         }



    public function getRouteKeyName()
    {
        return 'name';
    }
}
