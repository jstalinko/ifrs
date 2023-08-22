<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creditor_name' => $this->faker->name(),
            'description' => $this->faker->text(10),
            'paid' => rand(10, 100),
            'discount' => rand(10, 100)
        ];
    }
}
