<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'customer_number' => $this->faker->unique()->name(),
            'customer_name' => $this->faker->unique()->name(),
            'customer_name' => $this->faker->name(),
            'customer_address' => $this->faker->name(),
            'customer_phone' => $this->faker->name(),
            'customer_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
