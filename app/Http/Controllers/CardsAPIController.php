<?php

namespace App\Http\Controllers;

use App\City;
use App\Events\CardCreated;
use App\Notifications\NewCardAlert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Card;
use App\Tag;
use App\User;
use App\Merchant;
use App\OurPick;
use App\Category;
use Illuminate\Support\Facades\DB;
use Auth;
use Psy\Util\Str;

class CardsAPIController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // a list of all the cards
        //return Card::all();
        //$cards = Card::all();

        //$cards = Card::orderBy('created_at', 'desc')->paginate(1);
    //    $cards = Card::orderBy('created_at', 'desc')->paginate(6);
   //     return view('cards.index')->with('cards', $cards);

        $cards = Card::orderBy('created_at', 'desc')->paginate(6);
        $tags = Tag::all();
        $ourpicks = OurPick::all();
      
      //  return view('pages.index')->with('cards', $cards);
      //  return view('cards.index', compact('cards', 'tags', 'ourpicks'));

        return response()->json($cards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //

       // $newprice = $price * ((100-$amount) / 100);
        
        $categories = [];

        foreach (Category::all() as $category):
            $categories[$category->id] = $category->name;
        endforeach;

    // $merchants = [];

   // $merchants = User::find(Auth::id())->merchants;

        foreach (User::find(Auth::id())->merchants as $merchant):
            $merchants[$merchant->id] = $merchant->merchant_name;
        endforeach;


    //    return view('cards.create', compact('categories', 'merchants'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'card_product_name' => 'required',
            'card_product_description' => 'required',
            'card_old_price' => 'required',
            'card_new_price' => 'required',
            'category_id' => 'required',
           // 'card_merchant_name' => 'required',
            'cover_image' => 'image|nullable|max:599'
     
        ]);



            // Handle File Upload
            if($request->hasFile('cover_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }


        $card_discount_percentage = 50;

        $channel_id = 1;

        // create Card
        $card = new Card;
        $card->card_product_name = $request->input('card_product_name');
        $card->card_product_description = $request->input('card_product_description');
        $card->card_old_price = $request->input('card_old_price');

        $card->card_duration = $request->input('card_duration');

        $card->card_discount_percentage = $card_discount_percentage;

        $card->approved = 1;

      //  $card->channel_id = $request->input('category_id');

        $card->channel_id = $channel_id;
        $card->card_new_price = $request->input('card_new_price');
        $card->category_id = $request->input('category_id');
        $card->merchant_id = $request->input('merchant_id');
        // $card->card_merchant_city = $request->Merchant::get();
     // $card->card_merchant_name = $request->input('card_merchant_name');
        $card->user_id = auth()->user()->id;
        $card->cover_image = $fileNameToStore;
        $card->save();

        //$category = Category::where('name')->first();

        $category = Category::find($card->category_id);
        $card->categories()->attach($category);

        $city = City::find($card->city_id);

        $card->cities()->attach($city);


     //   $merchant = $card->merchant->merchant_name;


     //   $user = auth()->user()->user_id != $card->user_id;

     //   $user = User::first();

   //     $card = Card::first();
  //      $user->notify(new NewCardAlert($card));




        // Prepare Notifications for all subscribers.

        $card->merchant->subscriptions

            ->filter(function ($sub) use ($card) {

                return $sub->user_id != $card->user_id;

            })

            ->each->notify($card);


        // fire PostPublished event after post is successfully added to database
        event(new CardCreated($card));
// or
// \Event::fire(new PostPublished($post))


    //    return $card;

        // return post as response, Laravel automatically serializes this to JSON
        return response($card, 201);

/*         ->each(function ($sub) use ($card) {

                $sub->user->notify(new NewCardAlert($card));

            });*/



    /*    foreach ($card->subscriptions as $subscription) {

            if ($subscription->user_id != $card->user_id) {

            $subscription->user->notify(new NewCardAlert($card));

            }

        }*/




    //    $user = (new \App\Notifications\NewCardAlert())->toMail('ervinkahorere@gmail.com');


      //  return redirect('/cards')->with('flash', 'Card Created, you will be notified via Tex when the card is live and approved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)

    public function show($id)    {
        //

       //       dd($card->isSubscribedTo);

     //   return $card;
        $tags = Tag::all();
      $card = Card::find($id);
        $merchant = Merchant::find(1);
        // return view('cards.show')->with('card', $card);

       //$card_old_price = DB::table('cards')->where('card_old_price', $card_old_price)->first();
       // $card_new_price = DB::table('cards')->where('card_new_price', $card_new_price)->first();
       // $card_new_price = input('card_new_price');

       // $card_discount = $card_old_price * ((100-$card_new_price) / 100);

       // return view('cards.show', compact('card', 'tags', 'merchant'));

        return response()->json($card);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    $card = Card::find($id);
    //cHECK FOR CORrECT USER
if(auth()->user()->id !==$card->user_id){
     return redirect('/cards')->with('error', 'Unauthorized Page');
}
        return view('cards.edit')->with('card', $card);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         //
        $this->validate($request, [
            'card_product_name' => 'required',
            'card_product_description' => 'required',
            'card_old_price' => 'required',
            'card_new_price' => 'required',
         //   'card_merchant_name' => 'required',
            'cover_image' => 'image|nullable|max:599'
             ]);


            // Handle File Upload
            if($request->hasFile('cover_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            } 

            // create Card
            $card = Card::find($id);
            $card->card_product_name = $request->input('card_product_name');
            $card->card_product_description = $request->input('card_product_description');
            $card->card_old_price = $request->input('card_old_price');
            $card->card_new_price = $request->input('card_new_price');
      //      $card->card_merchant_name = $request->input('card_merchant_name');
             if($request->hasFile('cover_image')){
            $card->cover_image = $fileNameToStore;
            }

            $card->save();


            return redirect('/cards')->with('success', 'Card Updated, you will be notified via Tex when the card is live and approved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $card = Card::find($id);

         //cHECK FOR CORrECT USER
if(auth()->user()->id !==$card->user_id){
     return redirect('/cards')->with('error', 'Unauthorized Page');
}

if($card->cover_image != 'no_image.jpg'){
    // Delete image
    Storage::delete('public/cover_images/'.$card->cover_image);
}
        $card->delete();
        return redirect('/cards')->with('flash', 'Card Removed!');
    }


/**
 * Favorite a particular post
 *
 * @param  Card $card
 * @return Response
 */
 public function favoriteCard(Card $card)
 {
     Auth::user()->favorites()->attach($card->id);
 
     return back()->with('flash', 'Deal added to your Favorites!');
 }
 
 /**
  * Unfavorite a particular post
  *
  * @param  Card $card
  * @return Response
  */
 public function unFavoriteCard(Card $card)
 {
     Auth::user()->favorites()->detach($card->id);
 
     return back()->with('flash', 'Deal Unfavorited!');
 }
}
