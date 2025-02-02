<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class attribute_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected  $model = Attribute::class;

    public function run(): void
    {
        Attribute::factory()->count(10)->create();
    }
}
