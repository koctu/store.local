<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    protected $fillable = ['checked'];
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
