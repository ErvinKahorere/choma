<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/users/{id}', function($id){
    return 'This is user '.$id;
});

*/




// Facebook Socialite
use App\Events\CardCreated;

Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');


/*// Twitter Socialite
Route::get('login/twitter', 'Auth\LoginController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\LoginController@handleProviderCallback');

// Google Socialite
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
*/



Auth::routes();

Route::resource('tags', 'TagsController');


Route::group(['middleware' => 'auth'], function () {

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

});

// Route::resource('merchants', 'MerchantsController');



Route::resource('cities', 'CitiesController');


Route::get('merchants', 'MerchantsController@index');
Route::get('merchants/create', 'MerchantsController@create');
Route::get('merchants/{merchant}', 'MerchantsController@show');

Route::delete('merchants', 'MerchantsController@destroy');

Route::post('merchants', 'MerchantsController@store');

Route::get('/merchantCards/{merchant}', 'MerchantsController@merchantCards');




Route::post('/merchants/{merchant}/subscriptions', 'MerchantSubscriptionController@store')->middleware('auth');
Route::delete('/merchants/{merchant}/subscriptions', 'MerchantSubscriptionController@destroy')->middleware('auth');







Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/sell', 'PagesController@sell');

Route::get('/passport-test', 'PagesController@passport');




// Route::resource('cards', 'CardsController');

Route::get('cards', 'CardsController@index');
Route::get('cards/create', 'CardsController@create');
Route::get('cards/{channel}/{card}', 'CardsController@show');
Route::post('cards', 'CardsController@store');
Route::delete('cards', 'CardsController@destroy');

Route::resource('bannerads', 'BannerAdsController');
Route::resource('blogs', 'BlogsController');
Route::resource('combos', 'ComboDealsController');
Route::resource('ourpicks', 'OurPicksController');



Route::get('/profile/{user}', 'UserProfileController@profile')->name('profile');

Route::post('/profile/{user}', 'UserProfileController@update_avatar')->name('profile');

Route::get('/profile/{user}', 'UserProfileController@show')->name('profile');

Route::get('/profile/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profile/{user}/notifications/{notification}', 'UserNotificationsController@destroy');


Route::post('/cards/{channel}/{card}/subscriptions', 'CardSubscriptionController@store')->middleware('auth');
Route::delete('/cards/{channel}/{card}/subscriptions', 'CardSubscriptionController@destroy')->middleware('auth');



Route::get('/test', function () {

    $user = App\User::first();

    $card = App\Card::first();

    $user->notify(new \App\Notifications\NewCardAlert($card));

});






//Route::resource('/profile', 'UserProfileController');


//Route::post('/update_avatar', 'UserProfileController@update_avatar');


//Route::resource('/cards/cities/{city}', 'CitiesController');
//Route::resource('/cards/categories/{category}', 'CategoryController');

Route::resource('api/cards', 'CardsAPIController');

Route::resource('categories', 'CategoryController');
Route::resource('subscribers', 'SubscribersController');

Route::post('favorite/{card}', 'CardsController@favoriteCard');
Route::post('unfavorite/{card}', 'CardsController@unFavoriteCard');

Route::get('my_favorites', 'UserProfileController@myFavorites')->middleware('auth');


Route::post('/cards/{card}/reviews', 'ReviewController@store');


Route::get('/event', function(){
   event(new CardCreated('Hola bossa!'));
});

Route::get('/listen', function(){
    return view('pages.listenBroadcast');
});
