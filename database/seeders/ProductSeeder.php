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
                'name' => 'Vincent van der Voort',
                'description' => 'Ik ben een grote man en 3e meest verdiende nederlandse darter en je kunt me kopen maar 19,99',
                'price' => 19.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Danny Noppert',
                'description' => 'Ik ben een kleine maar snelle man en kan soms wel eens goed gooien maar soms ook echt kak voor maar 29,99',
                'price' => 29.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Van Gerwen',
                'description' => 'Ik ben de beste nederlanse darter en daardoor ook het duurste voor 99,99',
                'price' => 99.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Dirk van duijvenbode',
                'description' => 'Ik maak er altijd een festival van als ik op de stage kom en 180 is mijn specialiteit voor maar liefst 29,99',
                'price' => 29.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
            [
                'name' => 'Barney',
                'description' => 'Ik heb de grootste army in het darten en dat is de barney army dus als je mij koopt krijg je heel de army erbij',
                'price' => 149.99,
                'image' => 'https://r.testifier.nl/Acbs8526SDKI/resizing_type:fill/width:1200/height:675/plain/https%3A%2F%2Fs3-newsifier.ams3.digitaloceanspaces.com%2Fdartsnieuws.com%2Fimages%2F2022-06%2Ftoto-dart-kings-62b59574583d4.jpg'
            ],
        ];

        // Insert data into the 'products' table
        
        DB::table('products')->insert($products);
    }
}