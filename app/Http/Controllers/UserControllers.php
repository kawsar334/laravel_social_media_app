<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    //


    public function Home(){
        return view('front.home');
    }
}
