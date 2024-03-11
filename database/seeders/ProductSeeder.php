<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;   
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define sample data for products
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description for Product 1',
                'price' => 19.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for Product 2',
                'price' => 29.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for Product 3',
                'price' => 39.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Product 4',
                'description' => 'Description for Product 4',
                'price' => 49.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Product 5',
                'description' => 'Description for Product 5',
                'price' => 59.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
        ];

        // Insert data into the 'products' table
        
        DB::table('products')->insert($products);
    }
}