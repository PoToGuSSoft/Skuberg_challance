<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Http;


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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get("/user",function(){
    $test["test"] = 'test 1';
    $test["name"] = 'punya';
    $test["lastname"] = 'tumli';


    return view('user',$test);
});

Route::get("/test/{id?}",function($id = null){
    return 'test<br>'.$id ;
});*/

Route::get("/",[LoginController::class, 'form_login']);
Route::post("/login_in",[LoginController::class, 'loging_in']);
Route::get("/user_info",[UserController::class, 'user_info']);

Route::get("/post/{id}",[PostController::class, 'show']);

Route::get("/test_get_api",function(){
    
    //$test = get_rate("BTC");
    //var_dump($test);
    //var_dump(get_rate("BTC"));
   // $rate = $response['transferStats'];
    //$rate = get_currency_rate("BTC",$rate);

    //return $rate;
});

/*function get_rate($name){
    $rate = get_currency_rate($name);
    return ($rate->lowestAsk + $rate->highestBid) / 2;
}

function get_currency_rate($name){
    foreach(get_bitkup_price() as $key => $rate){
      // var_dump($name,$key)."<bt>";
       if($key === "THB_$name")return $rate;
    }
    return 1;
 }

 function get_bitkup_price(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.bitkub.com/api/market/ticker',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
            'Cookie: __cf_bm=MJWZJt9S9LYX5_ZI6_lNaKHPhHtF5aertdAlqYYJ1qU-1648265078-0-Aa/5+0GnGTPClid5GrDIFEnXy1Go4vXDaGOh4HBRhN4aqeKuHDTooMtrzOZ1u0ksQNPlUEmM6uBaQduJBb2F/bI='
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response);
    return $response;
 }*/