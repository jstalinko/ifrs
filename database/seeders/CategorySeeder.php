<?php

namespace Database\Seeders;

use Helper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'code' => Helper::genCode('category'),
                'name' => 'Uncategorized',
                'description' => 'Uncategorized'

            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Food',
                'description' => 'Food'

            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Drink',
                'description' => 'Drink'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Snack',
                'description' => 'Snack'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Dessert',
                'description' => 'Dessert'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Fruit',
                'description' => 'Fruit'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Vegetable',
                'description' => 'Vegetable'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Meat',
                'description' => 'Meat'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Fish',
                'description' => 'Fish'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Chicken',
                'description' => 'Chicken'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Beef',
                'description' => 'Beef'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Pork',
                'description' => 'Pork'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Seafood',
                'description' => 'Seafood'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Bread',
                'description' => 'Bread'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Cake',
                'description' => 'Cake'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Pastry',
                'description' => 'Pastry'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Noodle',
                'description' => 'Noodle'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Rice',
                'description' => 'Rice'
            ]
            ];


        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

    }
}
