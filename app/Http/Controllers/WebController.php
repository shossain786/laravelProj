<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        echo asset("/");
        return view("home");
    }

    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
}
