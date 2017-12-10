<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComboDeal;
use App\Tag;
use App\User;
use App\Merchant;
use App\Category;
use Illuminate\Support\Facades\DB;


class ComboDealsController extends Controller
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
         
 
         $combos = ComboDeal::orderBy('created_at', 'desc')->paginate(6);
         $tags = Tag::all();
       //  return view('pages.index')->with('combos', $combos);
         return view('combos.index', compact('combos', 'tags'));
 
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
 
         return view('combos.create', compact('categories'));
 
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
           
            'combo_description' => 'required',
            'offer1_image' => 'image|nullable|max:599',
             'offer1_title' => 'required',           
             'offer1_description' => 'required',
    
            'offer2_image' => 'image|nullable|max:599',
             'offer2_title' => 'required',           
             'offer2_description' => 'required',
            
             'offer3_image' => 'image|nullable|max:599',
             'offer3_title' => 'required',           
             'offer3_description' => 'required',

             'combo_lat' => 'required',           
             'combo_lng' => 'required',
             'combo_phone' => 'required',
       


            //  $table->string('offer1_image');
            //  $table->string('offer1_title');
            //  $table->mediumText('combo_description');
            //  $table->mediumText('offer1_description');
            //  $table->string('offer2_image');
            //  $table->string('offer2_title');
            //  $table->mediumText('offer2_description');
            //  $table->string('offer3_image');
            //  $table->string('offer3_title');
            //  $table->mediumText('offer3_description');
            //  $table->string('combo_old_price');
            //  $table->string('combo_new_price');
            //  $table->double('combo_lat', 20,10);
            //  $table->double('combo_lng', 20,10);
            //  $table->string('combo_phone');
            //  $table->string('combo_email');

      
         ]);
 
 
 
             // Handle File Upload offer1_image
             if($request->hasFile('offer1_image')){
                 // Get filename with the extension
                 $filenameWithExt = $request->file('offer1_image')->getClientOriginalName();
                 // Get just filename
                 $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                 // Get just ext
                 $extension = $request->file('offer1_image')->getClientOriginalExtension();
                 // Filename to store
                 $fileNameToStore= $filename.'_'.time().'.'.$extension;
                 // Upload Image
                 $path = $request->file('offer1_image')->storeAs('public/combo_images', $fileNameToStore);
             } else {
                 $fileNameToStore = 'noimage.jpg';
             }
 

              // Handle File Upload offer2_image
              if($request->hasFile('offer2_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('offer2_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('offer2_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('offer2_image')->storeAs('public/combo_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }


             // Handle File Upload offer3_image
             if($request->hasFile('offer3_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('offer3_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('offer3_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('offer3_image')->storeAs('public/combo_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

    //  $table->string('offer1_image');
            //  $table->string('offer1_title');
            //  $table->mediumText('combo_description');
            //  $table->mediumText('offer1_description');
            //  $table->string('offer2_image');
            //  $table->string('offer2_title');
            //  $table->mediumText('offer2_description');
            //  $table->string('offer3_image');
            //  $table->string('offer3_title');
            //  $table->mediumText('offer3_description');
            //  $table->string('combo_old_price');
            //  $table->string('combo_new_price');
            //  $table->double('combo_lat', 20,10);
            //  $table->double('combo_lng', 20,10);
            //  $table->string('combo_phone');
            //  $table->string('combo_email');


         // create ComboDeal
         $combo = new ComboDeal;
         $combo->offer1_title = $request->input('offer1_title');
         $combo->offer2_title = $request->input('offer2_title');
         $combo->offer3_title = $request->input('offer3_title');

         $combo->offer1_description = $request->input('offer1_description');
         $combo->offer2_description = $request->input('offer2_description');
         $combo->offer3_description = $request->input('offer3_description');

         $combo->combo_description = $request->input('combo_description');
         $combo->combo_old_price = $request->input('combo_old_price');
         $combo->combo_new_price = $request->input('combo_new_price');
         $combo->combo_lat = $request->input('combo_lat');
         $combo->combo_lng = $request->input('combo_lng');
         $combo->combo_phone = $request->input('combo_phone');
         $combo->combo_email = $request->input('combo_email');

         
         
         $combo->user_id = auth()->user()->id;
         
         
         $combo->offer1_image = $fileNameToStore;
         $combo->offer2_image = $fileNameToStore;
         $combo->offer3_image = $fileNameToStore;
         
         
         
         $combo->save();
 
         return redirect('/combos')->with('success', 'ComboDeal Created, you will be notified via Text when the card is live and approved!');
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
         $tags = Tag::all();
         $combo = ComboDeal::find($id);
         $merchant = Merchant::find($id);
         // return view('combos.show')->with('card', $combo);
 
        //$card_old_price = DB::table('combos')->where('card_old_price', $card_old_price)->first();
        // $card_new_price = DB::table('combos')->where('card_new_price', $card_new_price)->first();
        // $card_new_price = input('card_new_price');
 
        // $card_discount = $card_old_price * ((100-$card_new_price) / 100);
 
         return view('combos.show', compact('combo', 'tags', 'merchant'));
         
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
 
     $combo = ComboDeal::find($id);
     //cHECK FOR CORrECT USER
 if(auth()->user()->id !==$combo->user_id){
      return redirect('/combos')->with('error', 'Unauthorized Page');
 }
         return view('combos.edit')->with('card', $combo);
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
 
             // create ComboDeal
             $combo = ComboDeal::find($id);
             $combo->card_product_name = $request->input('card_product_name');
             $combo->card_product_description = $request->input('card_product_description');
             $combo->card_old_price = $request->input('card_old_price');
             $combo->card_new_price = $request->input('card_new_price');
       //      $combo->card_merchant_name = $request->input('card_merchant_name');
              if($request->hasFile('cover_image')){
             $combo->cover_image = $fileNameToStore;
             }
 
             $combo->save();
 
 
             return redirect('/combos')->with('success', 'ComboDeal Updated, you will be notified via Tex when the card is live and approved!');
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
         $combo = ComboDeal::find($id);
 
          //cHECK FOR CORrECT USER
 if(auth()->user()->id !==$combo->user_id){
      return redirect('/combos')->with('error', 'Unauthorized Page');
 }
 
 if($combo->cover_image != 'no_image.jpg'){
     // Delete image
     Storage::delete('public/cover_images/'.$combo->cover_image);
 }
         $combo->delete();
         return redirect('/combos')->with('success', 'ComboDeal Removed!');
     }
 }
 
