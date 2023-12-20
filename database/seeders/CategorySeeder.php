<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Fast Food'],
            ['id' => 2, 'name' => 'Drink'],
            ['id' => 3, 'name' => 'Dessert'],
            ['id' => 4, 'name' => 'Vegetable'],
            ['id' => 5, 'name' => 'Fruit'],
        ]);
    }
}