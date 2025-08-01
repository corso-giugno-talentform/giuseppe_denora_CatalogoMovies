<?php

namespace App\Http\Controllers;
use  App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
 
       public function homepage(){
            $films= Film::all();
            //utente loggato mostrara le card se non loggato la lista. gesito nella view
           return view('pages.homepage', compact('films'));

       }


}
