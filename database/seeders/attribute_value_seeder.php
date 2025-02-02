<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class attribute_value_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $model = AttributeValue::class;
    public function run(): void
    {
        AttributeValue::factory()->count(10)->create();
    }
}
