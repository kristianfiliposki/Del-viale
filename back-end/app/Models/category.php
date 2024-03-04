<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Product;

class category extends Model
{
    use HasFactory;

    public function Product(){
        return $this->belongsToMany(Product::class);
    }
}
