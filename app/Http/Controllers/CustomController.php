<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{

    public function mySelf(){
        return 'myself from custom controller';
    }

    public function yourSelf(){
        return 'yourSelf from custom contrller';
    }
}
