<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CreateCurrencysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('amount', 36, 18);
            $table->decimal('rate_price', 36, 18);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        $cur =[
            (object)['name'=>'BTC'],
            (object)['name'=>'ETH'],
            (object)['name'=>'XRP'],
            (object)['name'=>'DOGE'],
        ];
        
        foreach($cur as $c){
            $rate = get_rate($c->name);
            DB::insert("INSERT INTO currencys(name,amount,rate_price) VALUES ('$c->name',500,$rate)");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencys');
    }
}


function get_rate($name){
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
 }