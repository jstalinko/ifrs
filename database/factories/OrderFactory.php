<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Helper;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *   
     */
    public function definition(): array
    {
        return [
            'invoice' => Helper::genCode('invoice'),
            'customer_id' => rand(1,10),
            'total' => $this->faker->randomNumber(),
            'discount' => $this->faker->randomNumber(),
            'grand_total' => $this->faker->randomNumber(),
            'payment_status' => $this->faker->randomElement(['paid' , 'unpaid']),
            'product_id' => rand(1,4),
            'qty' => 1
        ];
    }
}
