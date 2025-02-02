<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductImage::class;
    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->first()->id,
            'url_image' => $this->faker->imageUrl(),
            'default_image' => $this->faker->boolean,
        ];
    }
}
