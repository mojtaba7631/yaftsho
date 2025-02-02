<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product_category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $categories = Category::all();

        foreach ($products as $product) {
            $category = $categories->random();

            ProductCategory::query()->create([
               'product_id' => $product->id,
               'category_id' => $category->id,
            ]);
        }
    }
}
