<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    use RecordsActivity;


    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function path()
    {
        return $this->card->path() . "#review-{$this->id}";
    }
}
