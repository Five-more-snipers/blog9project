<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CentralController extends Controller
{
    public function HomeMain(){
        return view('frontend.index');
    }// end mehtod 


    public function Index(){
        return view('about');
    } // end mehtod 


    public function ContactMethod(){
        return view('contact');
    }
}
