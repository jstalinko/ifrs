<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *  
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'supplier_number' => $this->faker->randomNumber(),
            'supplier_name' => $this->faker->name(),
            'supplier_address' => $this->faker->address(),
            'supplier_phone' => $this->faker->phoneNumber(),
            'supplier_email' => $this->faker->email(),
            'supplier_description' => $this->faker->text(255),

        ];
    }
}
