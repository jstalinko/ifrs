<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'journal_number' => $this->faker->unique()->name(),
            'journal_type' => $this->faker->name(),
            'journal_date' => $this->faker->name(),
            'journal_reference' => $this->faker->name(),
            'journal_description' => $this->faker->name(),
            'debit' => $this->faker->name(),
            'credit' => $this->faker->name()
        ];
    }
}