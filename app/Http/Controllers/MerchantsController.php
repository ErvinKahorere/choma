<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\OurPick;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Merchant;
use App\Card;
use App\Tag;
use Illuminate\Http\Request;

use Mapper;

class MerchantsController extends Controller
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
        // a list of all the merchants
        //return Merchant::all();
        //$merchants = Merchant::all();
      //   Mapper::map(53.381128999999990000, -1.470085000000040000);


       // $merchants = Merchant::orderBy('created_at', 'desc')->paginate(1);
        $merchants = Merchant::orderBy('created_at', 'desc')->paginate(6);
      //  return view('merchants.index')->with('merchants', $merchants);
       // return view('merchants.index')->with('merchants');

        $tags = Tag::all();

        $city = City::all();


     
      //  return view('pages.index')->with('cards', $cards);
        return view('merchants.index', compact('cards','tags', 'city', 'merchants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //

        $cities = [];

        foreach (City::all() as $city):
            $cities[$city->id] = $city->name;
        endforeach;



        return view('merchants.create', compact('cities'));

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
            
   

           'merchant_name' => 'required',
           'merchant_physical_address' => 'required',
          'merchant_lat' => 'required',
           //   'merchant_category' => 'required',
 // 'merchant_city' => 'required',


        'merchant_lng' => 'required',
        'merchant_phone' => 'required',
    //       'merchant_email' => 'required',
           'merchant_description' => 'required',
        'merchant_logo' => 'image|nullable|max:599'

     
        ]);



            // Handle File Upload
            if($request->hasFile('merchant_logo')){
                // Get filename with the extension
                $filenameWithExt = $request->file('merchant_logo')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('merchant_logo')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('merchant_logo')->storeAs('public/merchant_logos', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }




        // create Merchant
        $merchant = new Merchant;
        $merchant->merchant_name = $request->input('merchant_name');
        $merchant->merchant_physical_address = $request->input('merchant_physical_address');
        $merchant->merchant_lat = $request->input('merchant_lat');
        $merchant->merchant_lng = $request->input('merchant_lng');
   
        $merchant->merchant_phone = $request->input('merchant_phone');
              $merchant->merchant_city = $request->input('merchant_city');
        //$merchant->merchant_phone = $request->input('merchant_category');

        $merchant->merchant_email = $request->input('merchant_email');
        $merchant->merchant_description = $request->input('merchant_description');
        
        $merchant->merchant_phone = $request->input('merchant_phone');
        $merchant->merchant_website = $request->input('merchant_website');
          $merchant->merchant_facebook = $request->input('merchant_facebook');
        $merchant->merchant_twitter = $request->input('merchant_twitter');
    


     $merchant->user_id = auth()->user()->id;
        $merchant->merchant_logo = $fileNameToStore;
        $merchant->save();


        return redirect('/merchants')->with('success', 'Merchant Created, you will be notified via Tex when the merchant is live and approved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $merchant = Merchant::find($id);
     //   return $merchant;
        $ourpicks = OurPick::all();
        $tags = Tag::all();

        $cards = Merchant::find($id)->cards;
     //   $cards = Card::orderBy('created_at', 'desc')->paginate(3);

        // $merchant = Merchant::find($id);
        return view('merchants.show', compact('ourpicks', 'merchant', 'tags', 'cards'));
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

    $merchant = Merchant::find($id);
    //cHECK FOR CORrECT USER
if(auth()->user()->id !==$merchant->user_id){
     return redirect('/merchants')->with('error', 'Unauthorized Page');
}
        return view('merchants.edit')->with('merchant', $merchant);
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
            'card_merchant_name' => 'required',
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

          
        // create Merchant
        $merchant = new Merchant;
        $merchant->merchant_name = $request->input('merchant_name');
        $merchant->merchant_physical_address = $request->input('merchant_physical_address');
        $merchant->merchant_lat = $request->input('merchant_lat');
        $merchant->merchant_lng = $request->input('merchant_lng');
   
        $merchant->merchant_phone = $request->input('merchant_phone');
              $merchant->merchant_city = $request->input('merchant_city');
        $merchant->merchant_phone = $request->input('merchant_category');

        $merchant->merchant_email = $request->input('merchant_email');
        $merchant->merchant_description = $request->input('merchant_description');
        
        $merchant->merchant_phone = $request->input('merchant_phone');
        $merchant->merchant_website = $request->input('merchant_website');
          $merchant->merchant_facebook = $request->input('merchant_facebook');
        $merchant->merchant_twitter = $request->input('merchant_twitter');
    
             if($request->hasFile('merchant_logo')){
            $merchant->merchant_logo = $fileNameToStore;
            }

            $merchant->save();


            return redirect('/merchants')->with('success', 'Merchant Updated, you will be notified via Tex when the merchant is live and approved!');
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
        $merchant = Merchant::find($id);

         //cHECK FOR CORrECT USER
if(auth()->user()->id !==$merchant->user_id){
     return redirect('/merchants')->with('error', 'Unauthorized Page');
}

if($merchant->cover_image != 'no_image.jpg'){
    // Delete image
    Storage::delete('public/cover_images/'.$merchant->cover_image);
}
        $merchant->delete();
        return redirect('/merchants')->with('flash', 'Merchant Removed!');
    }

    public function merchantCards(Merchant $merchant)
    {

        $cards = $merchant->cards;
        $categories = Category::all();

        $tags = Tag::all();


        return view('merchants.merchant_cards', compact('cards', 'merchant','city','categories', 'categories', 'tags'));
    }
}
