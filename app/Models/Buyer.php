<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Wallet;
use App\Models\Order;

class Buyer extends Model
{
    use HasFactory;

    public function wallet(){
        return $this->belongsToMany(Wallet::class)->get();
    }

    public function order(){
        return $this->belongsToMany(Order::class)->get();
    }
}
