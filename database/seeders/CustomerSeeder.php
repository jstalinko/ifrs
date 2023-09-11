<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  
     */
    public function run(): void
    {
        $customers = [
            [
                'customer_name' => 'Richard',
                'customer_address' => 'Jl. Raya Ciputat No. 1',
                'customer_phone' => '081234567890',
                'customer_email' => 'richardlee@gmail.com',
                'customer_description' => 'Richard Lee'
            ],
            [
                'customer_name' => 'John',
                'customer_address' => 'Jl. Raya Ciputat No. 2',
                'customer_phone' => '081234567891',
                'customer_email' => 'johntoor@yahoo.com',
                'customer_description' => 'John Toor'
            ],
            [
                'customer_name' => 'Michael',
                'customer_address' => 'Jl. Raya Ciputat No. 3',
                'customer_phone' => '081234567892',
                'customer_email' => 'dantooolmichile@yahoo.com',
                'customer_description' => 'Michael Dantoool'
            ]
        ];

        foreach ($customers as $customer) {
            \App\Models\Customer::create($customer);
        }
    }
}
