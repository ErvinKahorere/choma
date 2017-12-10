<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardCategories extends Model
{
    protected $table = 'card_categories';

    public function cards() {
        return $this->belongsTo('cards');
    }

    public function categories() {
        return $this->belongsTo('categories');
    }
}
