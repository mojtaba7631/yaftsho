<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentences(3, true),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->numberBetween(1000, 999999),
            'description' => $this->faker->text(),
            'meta_description' => $this->faker->text(),
            'type' => $this->faker->randomElement(['physical' , 'digital']) ,
        ];
    }
}
