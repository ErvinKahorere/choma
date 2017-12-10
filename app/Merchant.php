<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{

    use RecordsActivity;


    protected $guarded = [];

    protected $appends = ['isSubscribedTo'];


    //Table Name
    protected $table = 'merchants';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;



    public function user(){
        return $this->belongsTo(User::class);
    }


    public function card()
    {
        return $this->hasMany(Card::class);
    }


    
    /**
     * Get all of the posts for the country.
     */
 //    public function cards()
  //   {
    //     return $this->hasManyThrough('App\Card', 'App\User',
      //   'merchant_id', 'user_id', 'id');
   //  }


    public function path()
    {
        return "/merchants/{$this->id}";
    }



    public function getRouteKeyName()
    {
        return 'merchant_name';
    }


     public function cards()
     {
         return $this->hasMany(Card::class);
     }


    protected static function boot()
    {
        parent::boot();
    }


    public function subscribe($userId = null)
    {
        $this->subscriptions()->create([
            'user_id' => $userId ?: auth()->id()
        ]);
    }

    public function unsubscribe($userId = null)
    {
        $this->subscriptions()
            ->where('user_id', $userId ?: auth()->id())
            ->delete();
    }

    public function subscriptions()
    {

        return $this->hasMany(MerchantSubscription::class);

    }


    public function getIsSubscribedToAttribute()
    {
        return $this->subscriptions()
            ->where('user_id', auth()->id())
            ->exists();
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }


}
