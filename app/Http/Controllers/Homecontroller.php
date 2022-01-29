<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home(){
        $newheading="this is first data pass from controller to view";
        return view('home',['newheading'=>$newheading]);
    }
}
