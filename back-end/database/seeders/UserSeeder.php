<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $users = [
                    [
                        'name' => 'Alice Johnson',
                        'email' => 'alice@example.com',
                        'punti' => 45,
                        'password' => 'password123',
                    ],
                    [
                        'name' => 'Bob Smith',
                        'email' => 'bob@example.com',
                        'punti' => 62,
                        'password' => 'qwerty123',
                    ],
                    [
                        'name' => 'Elena Rossi',
                        'email' => 'elena@example.com',
                        'punti' => 27,
                        'password' => 'password456',
                    ],
                    [
                        'name' => 'David Lee',
                        'email' => 'david@example.com',
                        'punti' => 81,
                        'password' => 'davidpass',
                    ],
                    [
                        'name' => 'Sophia Martinez',
                        'email' => 'sophia@example.com',
                        'punti' => 53,
                        'password' => 'sophiapass',
                    ],
                    [
                        'name' => 'Maximilian Fischer',
                        'email' => 'max@example.com',
                        'punti' => 19,
                        'password' => 'maxpass',
                    ],
                    [
                        'name' => 'Emma Wang',
                        'email' => 'emma@example.com',
                        'punti' => 36,
                        'password' => 'emmapass',
                    ],
                    [
                        'name' => 'Lucas Hernandez',
                        'email' => 'lucas@example.com',
                        'punti' => 70,
                        'password' => 'lucaspass',
                    ],
                    [
                        'name' => 'Ava Singh',
                        'email' => 'ava@example.com',
                        'punti' => 88,
                        'password' => 'avapass',
                    ],
                    [
                        'name' => 'Alexander Brown',
                        'email' => 'alex@example.com',
                        'punti' => 42,
                        'password' => 'alexpass',
                    ],
                

        ];

foreach ($users as $user) {
    $newuser = new User();
    $newuser->fill($user);
    $newuser->save();
    }
    }
}
