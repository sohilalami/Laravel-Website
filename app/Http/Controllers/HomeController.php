<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function showHome()
   {
       $products = [
           'Playstation 3',
           'Nintendo WII',
           'Playstation 4',
           'X BOX 360'
       ];


 $companies = DB::select('select * from companies');
    //    dd($companies);
    //    return abort('test');

        return view('home', [
            'producten' => $products,
            'companies' => $companies,
        ]);
   }

   public function showAboutUs()
   {
       return view('aboutus');
   }


}
