<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Card;
use App\Tag;
use App\ComboDeal;
use App\OurPick;
use App\Merchant;
use App\Category;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(Request $request, Category $category){
        //return view('pages.index');

         //$cards = Card::orderBy('created_at', 'desc')->paginate(1);
     
        $query = $request->get('q');
        
        if($query){
            
            $cards = $query ? Card::search($query)->orderBy('id', 'desc')->paginate(36):Card::all();
            $tags = Tag::all();
            $ourpicks = OurPick::all();
            $categories = Category::all();
            $combos = ComboDeal::all();
      //      $merchant = Merchant::find($id);
            return view('pages.search_results', compact('cards', 'tags','categories', 'ourpicks','query', 'combos'));
        
        }else {

     //   $cards = Card::all()
      //  ->where('approved', true)->paginate(21);

            $cards = Card::orderBy('created_at', 'desc')->paginate(6);

        $tags = Tag::all();
        $categories = Category::all();
        $combos = ComboDeal::orderBy('created_at', 'desc')->take(1)->get();
        $ourpicks = OurPick::all();
      $merchants = Merchant::all();
      //  return view('pages.index')->with('cards', $cards);
        return view('pages.index', compact('cards','merchants', 'tags', 'categories', 'ourpicks', 'combos'));

        }
    }

    public function about(){
        $tags = Tag::all();
        return view('pages.about', compact('tags'));
    }

    public function services(){
          $tags = Tag::all();
        return view('pages.services', compact('tags'));
    }

    public function sell(){
          $tags = Tag::all();
        return view('pages.sell',  compact('tags'));
    }


    public function passport(){
        $tags = Tag::all();

        $tags = Tag::all();
        $categories = Category::all();
        $combos = ComboDeal::orderBy('created_at', 'desc')->take(1)->get();
        $ourpicks = OurPick::all();
        $merchants = Merchant::all();
        //  return view('pages.index')->with('cards', $cards);
        return view('pages.passport-test', compact('cards','merchants', 'tags', 'categories', 'ourpicks', 'combos'));
    }
}
