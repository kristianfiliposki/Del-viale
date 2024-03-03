<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;

class User extends Seeder
{

    public function run(): void
    {
        $users = [
            [
                'name' => 'Federico ',
                'surname' => ' Rossi',
                'email' => 'FedericoRossi@gmail.com',
                'password' => 'FedericoRossi1234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

    foreach ($users as $user) {
        $newuser= new User;
        $newuser->user_id=$user['name'];
        $newuser->user_id=$user['surname'];
        $newuser->user_id=$user['email'];
        $newuser->user_id=$user['password'];
        $newuser->save();
    }
    }
}

