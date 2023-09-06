<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /** 
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word(50),
            'name' => $this->faker->word(100),
            'description' => $this->faker->text(255),
            'price' => $this->faker->randomNumber(),
            'price_modal' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl(),
            'stock' => $this->faker->randomNumber(),
            'category_id' => rand(1,20),
            'supplier_id' => json_encode(
                [$this->faker->name(),
                $this->faker->name(),
                $this->faker->name()]
            ),

        ];
    }
}
