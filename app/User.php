<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{
    use Notifiable;

    use RecordsActivity;

    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'city', 'phone_number', 'gender', 'slug', 'age_group'


    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cards(){
        return $this->hasMany(Card::class);
    }

    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function combo_deals(){
        return $this->hasMany(ComboDeal::class);
    }


    public function merchants(){
        return $this->hasMany(Merchant::class);
    }


    public function following()
    {
        return $this->belongsToMany('App\User', 'followers', 'user_id')->withTimestamps();
    }
    public function followers()
    {
        return $this->belongsToMany('App\User', 'followers', 'user_id')->withTimestamps();
    }


    /**
     * Get the route key name for Laravel.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }


    /**
 * Get all of favorite posts for the user.
 */
public function favorites()
{
    return $this->belongsToMany(Card::class, 'favorites', 'user_id', 'card_id')->withTimeStamps();
}

public function activity()
{
    return $this->hasMany(Activity::class);
}

public function socialAccounts(){

    return $this->hasMany(SocialAccount::class);

}

}
