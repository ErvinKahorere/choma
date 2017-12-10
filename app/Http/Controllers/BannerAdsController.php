<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerAd;
use App\Tag;
use Illuminate\Support\Facades\Storage;

class BannerAdsController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // a list of all the BannerAd
        //return BannerAd::all();
        //$BannerAd = BannerAd::all();

        //$BannerAd = BannerAd::orderBy('created_at', 'desc')->paginate(1);
    //    $BannerAd = BannerAd::orderBy('created_at', 'desc')->paginate(6);
   //     return view('BannerAd.index')->with('BannerAd', $BannerAd);

        $bannerads = BannerAd::all();
        $tags = Tag::all();
      //  return view('pages.index')->with('BannerAd', $BannerAd);
        return view('bannerads.index', compact('bannerads', 'tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
         return view('bannerads.create');

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
            } else {
                $fileNameToStore = 'noimage.jpg';
            }


        // create BannerAd
        $bannerad = new BannerAd;
        $bannerad->featured_image = $fileNameToStore;
        $bannerad->save();

        return redirect('/bannerads')->with('success', 'BannerAd Created, you will be notified via Tex when the bannerad is live and approved!');
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
        $bannerad = BannerAd::find($id);
        // return view('BannerAd.show')->with('bannerad', $bannerad);

         return view('BannerAd.show', compact('bannerad', 'tags'));
        
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

    $bannerad = BannerAd::find($id);
    //cHECK FOR CORrECT USER
//if(auth()->user()->id !==$bannerad->user_id){
  //   return redirect('/bannerads')->with('error', 'Unauthorized Page');
//}
        return view('bannerads.edit')->with('bannerad', $bannerad);
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

            // create BannerAd
             if($request->hasFile('featured_image')){
            $bannerad->featured_image = $fileNameToStore;
            }

            $bannerad->save();


            return redirect('/bannerads')->with('success', 'BannerAd Updated, you will be notified via Tex when the bannerad is live and approved!');
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
        $bannerad = BannerAd::find($id);

         //cHECK FOR CORrECT USER
//if(auth()->user()->id !==$bannerad->user_id){
  //   return redirect('/bannerads')->with('error', 'Unauthorized Page');
//}

if($bannerad->featured_image != 'no_image.jpg'){
    // Delete image
    Storage::delete('public/cover_images/'.$bannerad->featured_image);
}
        $bannerad->delete();
        return redirect('/bannerads')->with('success', 'BannerAd Removed!');
    }
}
