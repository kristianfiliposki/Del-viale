<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'giacomo',
                'email' => 'dajegiacomo@hotmail.it',
                'punti' => 30,
                'password' => 'ciao',
            ],

        ];

        foreach ($users as $user) {
            $newuser = new User();
            $newuser->fill($user);
            $newuser->save();
            dd('User seeded:', $newUser);
        }
    }
}
