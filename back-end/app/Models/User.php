<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use App\models\Role;
use App\models\Product;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory;

    public function Role(){
        return $this->belongsTo(Role::class);
    }

    public function Products(){
        return $this->belongsToMany(Product::class);
    }
    

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
