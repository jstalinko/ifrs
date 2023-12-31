<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *  
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice' => $this->faker->unique()->word(50),
            'supplier_id' => rand(1,20),
            'total' => $this->faker->randomNumber(),
            'discount' => $this->faker->randomNumber(),
            'grand_total' => $this->faker->randomNumber(),
            'payment_status' => $this->faker->randomElement(['paid' , 'unpaid']),
            'category_id' => rand(1,20),
        ];
    }
}
