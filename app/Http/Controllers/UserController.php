<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user_info(Request $request){
        $user = $request->session()->get('user');
        $data = [
            'user' => $request->session()->get('user'),
            'wallet' =>  $user->wallet()
        ];
        //dd( $data );
        return view("coinex.dashboard.index", $data );
    }
}
