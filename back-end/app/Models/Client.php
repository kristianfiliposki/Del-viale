<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\User;


class client extends Model
{
    use HasFactory;

    public function user(){
     return $this->hasOne(User::class);   
    }

    public function role(){
        return $this->belongsTo(Role::class);   
       }
   

    public $fillable=[
        'name',
        'punti',
        'img_url',

    ];




}
