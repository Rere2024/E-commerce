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
            'title'=>fake()->randomElement(['SummerCollection','WinterCollection','SpringCollection']),
            'price'=>fake()->numberBetween(500,7000),
            'rate'=>fake()->numberBetween(1,5),
            'published'=>fake()->boolean(),
            'image'=>basename(fake()->image(public_path('assets/public/images/products'))),
            'category_id'=>fake()->numberBetween(1,4),
        ];
    }
}
