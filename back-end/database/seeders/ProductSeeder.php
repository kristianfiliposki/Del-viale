<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Models\Product;


class ProductSeeder extends Seeder
{

        /* creo un arrey da popolare */
        public function run()
        {
            $products = [
                [
                    'name' => 'xiqo',
                    'description' => 'bello come marinqa',
                    'ingredients' => "jbhjhbbhjjhbvbhjhjbbhjbhjbhjkbjkkbjnnjknjk",
                    'price' => 2,
                ],
                [
                    'name' => 'xiqo',
                    'description' => 'bello come marinqa',
                    'ingredients' => 3,
                    'price' => 2,
                ],
            ];
            
            DB::table('products')->insert($products);
         }
    }



