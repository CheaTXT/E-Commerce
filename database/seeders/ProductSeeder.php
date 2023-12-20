<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Pizza',
                'category_id' => 1,
                'pricing' => 10,
                'description' => 'Spicy prown flavor.',
            ],
            [
                'id' => 2,
                'name' => 'Burger',
                'category_id' => 2,
                'pricing' => 8.5,
                'description' => 'Juicy beef burger with fresh vegetables.',
            ],
            [
                'id' => 3,
                'name' => 'Pasta',
                'category_id' => 1,
                'pricing' => 12.75,
                'description' => 'Delicious pasta with homemade tomato sauce.',
            ],
            [
                'id' => 4,
                'name' => 'Salad',
                'category_id' => 3,
                'pricing' => 6.99,
                'description' => 'Healthy salad with mixed greens and vinaigrette.',
            ],
            [
                'id' => 5,
                'name' => 'Sushi',
                'category_id' => 4,
                'pricing' => 15.25,
                'description' => 'Fresh sushi rolls with assorted seafood.',
            ],
        ]);
    }
}