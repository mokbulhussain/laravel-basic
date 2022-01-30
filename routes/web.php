<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/




//basic routing
/*
Route::get('/hello',function(){
    return "hello";
});

Route::get('/name',function(){
    return "my name is mokbul";
});
*/




//basic routing with view
/*
Route::get('/',function(){
    return view('homePage');
});

Route::get('/about',function(){
    return view('aboutPage');
});
*/



//basic routing with controller
/*
Route::get('/',[\App\Http\Controllers\SiteController::class,'Home']);

Route::get('/about',[\App\Http\Controllers\SiteController::class,'About']);

Route::get('/contact',[\App\Http\Controllers\SiteController::class,'Contact']);
*/


//basic routing with parameter
//Route::get('/name/{nameValue}',[\App\Http\Controllers\SiteController::class,'infoName']);


//
////routing with multiple parameter
//Route::get('/name/{fname}/{lname}',[\App\Http\Controllers\SiteController::class,'fullname']);



//routing with  parameter controller to view
//Route::get('/name/{fname}/{lname}',[\App\Http\Controllers\SiteController::class,'fullname']);


// basic routing group
/*
Route::group(['prefix'=>'account'],function(){
    Route::get('/profile',function(){
        return 'profile';
    });
    Route::get('/login',function(){
        return 'login';
    });

    Route::get('/profileUpdate',function(){
        return 'profileUpdate';
    });
});
*/


//single contrller
//Route::get('/', \App\Http\Controllers\SingleController::class);


// custom controller
//Route::get('/',[\App\Http\Controllers\CustomController::class,'mySelf']);
//Route::get('/yourSelf',[\App\Http\Controllers\CustomController::class,'yourSelf']);


// passing data from controller to view
//Route::get('/',[\App\Http\Controllers\Homecontroller::class,'home']);


//Route::get('/',[\App\Http\Controllers\Homecontroller::class,'mainHome']);

Route::get('/',[\App\Http\Controllers\Homecontroller::class,'masterHome']);
