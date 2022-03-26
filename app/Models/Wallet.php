<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Currency;
use App\Models\Buyer;
use App\Models\Order;
use App\Models\User;

class Wallet extends Model
{
    use HasFactory;



    public function user(){
        return $this->belongsTo(User::class);
    }
    public function buyer(){
        return $this->hasMany(Buyer::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }

    public function currency(){
        return $this->hasOne(Currency::class);
    }
}
