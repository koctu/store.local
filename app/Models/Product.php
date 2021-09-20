<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['slug', 'title', 'gender', 'age', 'price', 'interactive', 'barcode' , 'image', 'new', 'hit', 'sale'];

    use HasFactory;
    public function categories()
    {

        return $this->belongsToMany(Category::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function trademark(){
        return $this->belongsTo(Trademark::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function getPriceForCount(){
        if(!is_null($this->pivot)){
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }
}
