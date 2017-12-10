<?php

namespace App;

use App\Events\CardHasNewReview;
use App\Notifications\CardWasUpdated;
use Illuminate\Database\Eloquent\Model;
use App\Favorite;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Card extends Model
{
    use RecordsActivity;

    use Notifiable;



    protected $guarded = [];

    protected $appends = ['isSubscribedTo'];

    //Table Name
    protected $table = 'cards';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function cities()
    {
        return $this->belongsToMany(City::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('card_product_name', 'like', '%' . $search . '%');
    }

    /**
     * Determine whether a post has been marked as favorite by a user.
     *
     * @return boolean
     */
    public function favorited()
    {
        return (bool)Favorite::where('user_id', Auth::id())
            ->where('card_id', $this->id)
            ->first();
    }

    public function path()
    {
        return "/cards/{$this->channel->slug}/{$this->id}";
       // return '/cards/' . $this->id;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function addReview($review)
    {
        $review = $this->reviews()->create($review);

        $this->notifySubscribers($review);

        // Prepare notifications for all subscribers.
      //  event(new CardHasNewReview($this, $review));

        return $review;

    }

    public function notifySubscribers($review)
    {

         $this->subscriptions
            ->where('user_id', '!=', $review->user_id)
            ->each
            ->notify($review);


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

        return $this;
    }

    public function unsubscribe($userId = null)
    {
        $this->subscriptions()
            ->where('user_id', $userId ?: auth()->id())
            ->delete();
    }

    public function subscriptions()
    {

        return $this->hasMany(CardSubscription::class);

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
