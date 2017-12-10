<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function cards()
        {
            return $this->belongsToMany(Card::class);
        }
        
    public function getRouteKeyName()
    {
      return 'name';
    }
}
