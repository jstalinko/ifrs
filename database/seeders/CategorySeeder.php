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
                'name' => 'Minuman',
                'description' => 'Minuman'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Makanan',
                'description' => 'Makanan'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Snack',
                'description' => 'Snack'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Peralatan',
                'description' => 'Peralatan'
            ],
            [
                'code' => Helper::genCode('category'),
                'name' => 'Lainnya',
                'description' => 'Lainnya'
            ],
        ];


        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

    }
}
