<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AttributeValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AttributeValue::class ;
    public function definition(): array
    {
        return [
            'attribute_id' => Attribute::inRandomOrder()->first()->id,
            'value' => $this->faker->word(),
        ];
    }
}
