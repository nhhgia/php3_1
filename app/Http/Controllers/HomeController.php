<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $azurlane = Product::where('game_id', 1)->take(4)->get();
         $zzz = Product::where('game_id', 2)->take(4)->get();
          $hsr = Product::where('game_id', 3)->take(4)->get();
           $a9 = Product::where('game_id', 4)->take(4)->get();
            $a9e = Product::where('game_id', 5)->take(4)->get();
        return view('home',compact('azurlane', 'zzz', 'hsr', 'a9', 'a9e'));
    }
}
