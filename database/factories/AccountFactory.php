<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_number' => $this->faker->unique()->bankAccountNumber(),
            'account_name' => $this->faker->name(),
            'account_type' => $this->faker->randomElement(['Cash', 'Bank']),
            'account_balance' => $this->faker->randomFloat(2, 100, 100000),
            'account_description' => $this->faker->text(),
        ];
    }
}
