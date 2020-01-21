<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
   {
       $products = [
           'Autoradio',
           'Cd speler',
           'Playstation',
           'MacBook Pro'
       ];
       
       return view('home', ['producten' => $products]);
   }

   public function showAboutUs()
   {
       return view('aboutus');
   }

   public function showName($name)
   {
       return view('showname', ['naam' => $name]);
   }
}
