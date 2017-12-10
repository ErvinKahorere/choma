<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Merchant;
use App\Card;
use Auth;
use Image;


class UserProfileController extends Controller
{
             
     

            public function profile(User $user)
            {
               // return $user->activity;

                //return $user->activity()->with('subject')->get();

                $activities = $user->activity()->with('subject')->get();

                $user_id = auth()->user()->id;
                $user = User::find($user_id);
        
                $initial = auth()->user()->name;
        
                $initial2 = substr($initial, 0, 1);
        
                $merchants = User::find(Auth::id())->merchants;
                $cards = User::find(Auth::id())->cards;

                $feeds = $user->activity();

                $myFavorites = Auth::user()->favorites;
        
                
             //   $merchants = Merchant::all();
                
               // $card = auth()->user()->Card::all();
        
              //  $cards = Card::all();
        
              $user = Auth::user();

             // dd($user);
              
              return view('auth.profile', compact('user', 'activities','myFavorites', 'card', 'feeds', 'cards', 'merchants', 'initial' , 'initial2'));
                
            }
        
            public function update_avatar(Request $request){


                $user_id = auth()->user()->id;
                $user = User::find($user_id);

                $activities = $user->activity()->with('subject')->get();
                $initial = auth()->user()->name;
        
                $initial2 = substr($initial, 0, 1);
        
                $merchants = User::find(Auth::id())->merchants;
                $cards = User::find(Auth::id())->cards;

                $myFavorites = Auth::user()->favorites;
        

                    //Handle the user upload of Avatar
            if($request->hasFile('avatar')){
                $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->crop(300, 300)->save( public_path('/uploads/avatars/' . $filename));

                $user = Auth::user();
                $user->avatar = $filename;
                $user->save();


                $user = Auth::user();

                return back()->with('flash', 'Avatar Updated!');
                
             //   return view('auth.profile', compact('user', 'activities','card', 'cards', 'merchants', 'initial' , 'initial2'));

                    
                }
            else {
                return view('auth.profile', compact('user', 'card', 'activities', 'cards', 'merchants', 'initial' , 'initial2'));
            }
        }

        public function show($name)
        {



            $user= User::where('name', $name)->firstOrFail();
            $user_id = auth()->user()->id;
         //   $user = User::find($user_id);


           // return $user->activity;

            $activities = $user->activity()->with('subject')->get();

            $myFavorites = Auth::user()->favorites;
    
            $initial = auth()->user()->name;
    
            $initial2 = substr($initial, 0, 1);
    
            $merchants = User::find(Auth::id())->merchants;
            $cards = User::find(Auth::id())->cards;
    
            $name = auth()->user()->name;

         $user = User::where('name', $name)->firstOrFail();
            $me = Auth::user();
            $is_edit_profile = (Auth::id() == $user->id);
            $is_follow_button = !$is_edit_profile && !$me->isFollowing($user);
          //  return view('auth.profile', ['user' => $user, );


      //    return view('auth.profile', ['user' => $user, 'is_edit_profile' => $is_edit_profile, 'is_follow_button' => $is_follow_button]);

          return view('auth.profile',  compact('user', 'activities', 'myFavorites','name', 'card', 'cards', 'merchants', 'initial' , 'initial2', 'is_edit_profile', 'is_follow_button'));


         //   return view('auth.profile',  compact('user', 'username', 'card', 'cards', 'merchants', 'initial' , 'initial2'));
        }

        public function myFavorites()
        {
           
            $name = auth()->user()->name;

            $user = User::where('name', $name)->firstOrFail();
            $user_id = auth()->user()->id;
         //   $user = User::find($user_id);
    
            $initial = auth()->user()->name;
    
            $initial2 = substr($initial, 0, 1);
    
            $merchants = User::find(Auth::id())->merchants;
            $cards = User::find(Auth::id())->cards;
            
            $myFavorites = Auth::user()->favorites;

            $activities = $user->activity()->with('subject')->get();
        
            return view('auth.profile', compact('myFavorites', 'user', 'activities', 'name', 'card', 'cards', 'merchants', 'initial' , 'initial2', 'is_edit_profile', 'is_follow_button'));
        }

      
}
