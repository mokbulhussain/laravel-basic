<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //basic route with controller
//    function Home(){
//        return 'This is home page';
//    }
//
//    function About(){
//        return 'This is about page';
//    }
//
//    function Contact(){
//        return 'This is contact page';
//    }




/*

    //basic routing with view and controller
    function Home(){
        return view('homePage');
    }

    function About(){
        return view('aboutPage');
    }

    function Contact(){
        return view('contactPage');
    }

*/


// basic routing with parameter
    function infoName($nameValues){
        return $nameValues;
    }


    //routing with multipule parameter
//    function fullname($fname,$lname){
//        return "First Name ".$fname ."Last name " .$lname;
//    }




    // basic routing parameter controller to view
    function fullname($fname,$lname){
        return view('demoView',['fname'=>$fname,'lname'=>$lname]);
    }



}
