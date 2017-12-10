<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Blog;
use App\Tag;
use App\User;
use App\Merchant;
use App\OurPick;
use App\Category;
use Illuminate\Support\Facades\DB;


class BlogsController extends Controller
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
        // a list of all the blogs
        //return Blog::all();
        //$blogs = Blog::all();

        //$blogs = Blog::orderBy('created_at', 'desc')->paginate(1);
    //    $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
   //     return view('blogs.index')->with('blogs', $blogs);

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        $tags = Tag::all();
        $ourpicks = OurPick::all();
      //  return view('pages.index')->with('blogs', $blogs);
        return view('blogs.index', compact('blogs', 'tags', 'ourpicks'));

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

        return view('blogs.create', compact('categories'));

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
            'title' => 'required',
            'body' => 'required',
            'featured_image' => 'image|nullable|max:599'
     
        ]);



            // Handle File Upload
            if($request->hasFile('featured_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('featured_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('featured_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('featured_image')->storeAs('public/featured_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }


        // create Blog
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->user_id = auth()->user()->id;
        $blog->featured_image = $fileNameToStore;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog Created, you will be notified via Tex when the card is live and approved!');
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
        $blog = Blog::find($id);
        $merchant = Merchant::find($id);
        // return view('blogs.show')->with('card', $card);

       //$card_old_price = DB::table('blogs')->where('card_old_price', $card_old_price)->first();
       // $card_new_price = DB::table('blogs')->where('card_new_price', $card_new_price)->first();
       // $card_new_price = input('card_new_price');

       // $card_discount = $card_old_price * ((100-$card_new_price) / 100);

        return view('blogs.show', compact('blog', 'tags', 'merchant'));
        
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

    $card = Blog::find($id);
    //cHECK FOR CORrECT USER
if(auth()->user()->id !==$card->user_id){
     return redirect('/blogs')->with('error', 'Unauthorized Page');
}
        return view('blogs.edit')->with('card', $card);
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
            'featured_image' => 'image|nullable|max:599'
             ]);


            // Handle File Upload
            if($request->hasFile('featured_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('featured_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('featured_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('featured_image')->storeAs('public/cover_images', $fileNameToStore);
            } 

            // create Blog
            $card = Blog::find($id);
            $card->card_product_name = $request->input('card_product_name');
            $card->card_product_description = $request->input('card_product_description');
            $card->card_old_price = $request->input('card_old_price');
            $card->card_new_price = $request->input('card_new_price');
      //      $card->card_merchant_name = $request->input('card_merchant_name');
             if($request->hasFile('featured_image')){
            $card->featured_image = $fileNameToStore;
            }

            $card->save();


            return redirect('/blogs')->with('success', 'Blog Updated, you will be notified via Tex when the card is live and approved!');
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
        $card = Blog::find($id);

         //cHECK FOR CORrECT USER
if(auth()->user()->id !==$card->user_id){
     return redirect('/blogs')->with('error', 'Unauthorized Page');
}

if($card->featured_image != 'no_image.jpg'){
    // Delete image
    Storage::delete('public/cover_images/'.$card->featured_image);
}
        $card->delete();
        return redirect('/blogs')->with('success', 'Blog Removed!');
    }
}
