<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home(){
        $newheading="this is first data pass from controller to view";
        $data=array("bangladesh","india","pakistan");
//        $data2=array();
        $loginStatus=false;
        return view('home',['newheading'=>$newheading,'data'=>$data,'loginStatus'=>$loginStatus]);
    }

    public function mainHome(){
        return view('mainHome');
    }

    public function masterHome(){
        return view('masterHome');
    }
}
