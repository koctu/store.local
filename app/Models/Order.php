<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice(){
        $sum = 0;
        foreach($this->products as $product){
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function saveOrder($shop, $payment){
        if ($this->status == 0){
            $this->id_shop = $shop;
            $this->payment_var = $payment;
            $this->status = 1;
            $this->save();
            session()->invalidate();
            return true;
        }
        else{
            return false;
        }
    }
}
