<?php

// database/seeders/ProductSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Define sample data for products
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for Product 3',
                'price' => 39.99,
            ],
            [
                'name' => 'Product 4',
                'description' => 'Description for Product 4',
                'price' => 49.99,
            ],
            [
                'name' => 'Product 5',
                'description' => 'Description for Product 5',
                'price' => 59.99,
            ],
        ];

        // Insert data into the 'products' table
        DB::table('products')->insert($products);
    }
}