<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Wallet;
use App\Models\Currency;
use App\Models\Buyer;

class Order extends Model
{
    use HasFactory;

    public function wallet(){
        return $this->hasOne(Wallet::class)->get();
    }

    public function currency(){
        return $this->hasOne(Currency::class)->get();
    }

    public function buyer(){
        return $this->hasMany(Buyer::class)->get();
    }
}
