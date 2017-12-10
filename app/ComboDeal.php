<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Card;
use App\Tag;
use App\User;
use App\Merchant;
use App\OurPick;
use App\Category;
use Illuminate\Support\Facades\DB;

class ComboDeal extends Model
{
     //Table Name
     protected $table = 'combo_deals';
     
         // Primary Key
         public $primaryKey = 'id';
     
         // Timestamps
         public $timestamps = true;
     
         public function user(){
             return $this->belongsTo('App\User');
         }
     
         public function merchants()
         {
             return $this->belongsTo(Merchant::class);
         }
     
     
         public function cities()
         {
             return $this->belongsToMany(City::class);
         }

}
