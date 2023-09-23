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
        $inv = [
            'INV'.strtoupper('TEST1'),
            'INV'.strtoupper('TEST2'),
            'INV'.strtoupper('TEST3'),
            'INV'.strtoupper('TEST4'),
            'INV'.strtoupper('TEST5'),
        ];
        shuffle($inv);
        return [
            'invoice' => $inv[0],
            'customer_id' => rand(1,10),
            'total' => rand(1000000,10000000000),
            'discount' => 0,
            'grand_total' => rand(100000,10000000),
            'payment_status' => $this->faker->randomElement(['paid' , 'unpaid']),
            'product_id' => rand(1,4),
            'qty' => 1,
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now')
        ];
    }
}
