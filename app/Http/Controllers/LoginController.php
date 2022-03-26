<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function form_login(){
        
        return view('Login_v2.index');
    }

    public function loging_in(Request $request){
        $res = (object)[];
        $auth = User::where('email',$_POST['email'])
            ->where('password',$this->encrypt($_POST['pass']))
            ->first();
        if($auth){
            $res->title = 'login success';
            $res->icon = 'success'; 
            $request->session()->put('user', $auth);
        }else{
            $res->title = 'login false';
            $res->icon = 'warning'; 
        }
        $res->sesseion = $request->session()->get('user');
        return json_encode($res);
    }

    function encrypt($string){
        $string = openssl_encrypt( $string, "AES-256-CBC", "BTrLWmy6HrfRwdMf", 1, "G2eU3gHSeqz6zjzz");
        return base64_encode($string);
    }
    
    function decrypt($string){
		$string = $this->base64_decode($string);
		return openssl_decrypt( $string, "AES-256-CBC","BTrLWmy6HrfRwdMf", 1, "G2eU3gHSeqz6zjzz");
    }
}
