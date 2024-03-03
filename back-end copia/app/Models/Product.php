<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Category;
use App\models\User;


class product extends Model
{
    use HasFactory;

    public function Category(){
        return $this->belongsToMany(category::class);
    }

    public function User(){
        return $this->belongsToMany(User::class);
    }
}
