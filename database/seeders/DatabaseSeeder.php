<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Order;
use App\Models\Product;

use App\Models\Category;
use App\Models\Customer;

use App\Models\Supplier;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Customer::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        Category::factory(20)->create();
        Order::factory(30)->create();
        Supplier::factory(20)->create();
        Product::factory(20)->create();
    }
}
