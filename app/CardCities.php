<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardCities extends Model
{
    protected $table = 'card_cities';

    public function cards() {
        return $this->belongsTo('cards');
    }

    public function cities() {
        return $this->belongsTo('cities');
    }
}
