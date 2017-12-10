<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\OurPick;
use App\Tag;
use App\Category;

class OurPicksController extends Controller
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
        // a list of all the ourpicks
        //return OurPick::all();
        //$ourpicks = OurPick::all();

        //$ourpicks = OurPick::orderBy('created_at', 'desc')->paginate(1);
    //    $ourpicks = OurPick::orderBy('created_at', 'desc')->paginate(6);
   //     return view('ourpicks.index')->with('ourpicks', $ourpicks);

        $ourpicks = OurPick::orderBy('created_at', 'desc')->paginate(6);
        $tags = Tag::all();
      //  return view('pages.index')->with('ourpicks', $ourpicks);
        return view('ourpicks.index', compact('ourpicks', 'tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //

        foreach (Category::all() as $category):
            $categories[$category->id] = $category->name;
        endforeach;

         return view('ourpicks.create', compact('categories'));

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


    // create Card
    $card = new OurPick;
    $card->card_product_name = $request->input('card_product_name');
    $card->card_product_description = $request->input('card_product_description');
    $card->card_old_price = $request->input('card_old_price');
    $card->card_new_price = $request->input('card_new_price');
    $card->category_id = $request->input('category_id');
  //  $card->card_merchant_name = $request->input('card_merchant_name');
    $card->user_id = auth()->user()->id;
    $card->cover_image = $fileNameToStore;
    $card->save();

        return redirect('/ourpicks')->with('success', 'OurPick Created, you will be notified via Text when the ourpick is live and approved!');
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
        $ourpick = OurPick::find($id);
        // return view('ourpicks.show')->with('ourpick', $ourpick);

         return view('ourpicks.show', compact('ourpick', 'tags'));
        
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

    $ourpick = OurPick::find($id);
    //cHECK FOR CORrECT USER
//if(auth()->user()->id !==$ourpick->user_id){
  //   return redirect('/ourpicks')->with('error', 'Unauthorized Page');
//}
        return view('ourpicks.edit')->with('ourpick', $ourpick);
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

            // create OurPick
            $ourpick = OurPick::find($id);
            $ourpick->card_product_name = $request->input('card_product_name');
            $ourpick->card_product_description = $request->input('card_product_description');
            $ourpick->card_old_price = $request->input('card_old_price');
            $ourpick->card_new_price = $request->input('card_new_price');
            $ourpick->card_merchant_name = $request->input('card_merchant_name');
             if($request->hasFile('cover_image')){
            $ourpick->cover_image = $fileNameToStore;
            }

            $ourpick->save();


            return redirect('/ourpicks')->with('success', 'OurPick Updated, you will be notified via Tex when the ourpick is live and approved!');
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
        $ourpick = OurPick::find($id);

         //cHECK FOR CORrECT USER
//if(auth()->user()->id !==$ourpick->user_id){
  //   return redirect('/ourpicks')->with('error', 'Unauthorized Page');
//}

if($ourpick->cover_image != 'no_image.jpg'){
    // Delete image
    Storage::delete('public/cover_images/'.$ourpick->cover_image);
}
        $ourpick->delete();
        return redirect('/ourpicks')->with('success', 'OurPick Removed!');
    }
}
