<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Product 1', 'category' => 'Electronics', 'price' => 99.99]);
        Product::create(['name' => 'Product 2', 'category' => 'Books', 'price' => 19.99]);
        Product::create(['name' => 'Product 3', 'category' => 'Clothing', 'price' => 29.99]);
        Product::create(['name' => 'Product 4', 'category' => 'Electronics', 'price' => 199.99]);

    }
}
