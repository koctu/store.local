<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $fillable = ['slug', 'name' , 'id', 'category_id', 'product_id'];

    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
