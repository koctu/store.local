<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    use HasFactory;

    protected $fillable = ['country_name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
