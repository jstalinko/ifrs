<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Helper;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //faker locale ID $table->string('customer_number')->unique();
            
        $faker = \Faker\Factory::create('id_ID');

        return [
            'customer_number' => Helper::genCode('customer'),
            'customer_name' => $faker->name(),
            'customer_address' => $faker->address(),
            'customer_phone' => $faker->phoneNumber(),
            'customer_email' => $faker->email(),
            'customer_description' => 'Pengguna ' . $faker->name(),
        ];
    }
}
