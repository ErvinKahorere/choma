<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   // protected $guarded = [];

    public function cards()
    {
        return $this->belongsToMany(Card::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
 