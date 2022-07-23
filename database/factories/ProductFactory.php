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
    public function definition()
    {
        return [
            //
            'image' => $this->faker->imageUrl(),
            'barcode' => $this->faker->randomNumber(5, true),
            'title' => $this->faker->name(),
            'description' => $this->faker->word(),
            'buy_price' => $this->faker->numberBetween(12000, 120000),
            'sell_price' => $this->faker->numberBetween(10000, 100000),
            'category_id' => $this->faker->numberBetween(1, 15),
            'stock' => $this->faker->numberBetween(1, 15)
        ];
    }
}
