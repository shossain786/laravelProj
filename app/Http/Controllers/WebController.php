<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        // echo asset("/"); //it prints the path of project directory
        return view("home");
    }

    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }

    public function handleSubmittedData(Request $request){
        $name = $request ->input("name");
        $email = $request ->input(key: "email");
        return response()->json([
            "name"=> $name,
            "email"=> $email
        ]);
    }
}
