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
                'name' => 'Strelitzia nicolai',
                'description' => 'De Strelitzia, beter bekend als de "Paradijsvogelplant", is een majestueuze toevoeging aan elke plantencollectie. Zijn bijnaam heeft hij te danken aan de vorm van zijn prachtige bloemen, die lijken op een paradijsvogel. Helaas bloeit de Strelitzia maar zelden in onze huiskamers. Als je op zoek bent naar een echte blikvanger, dan is de Strelitzia Nicolai de perfecte keuze. Zijn indrukwekkende bladeren maakt hem tot een favoriet onder plantenliefhebbers. ',
                'price' => 99.95,
                'image' => 'https://www.plantsome.nl/cdn/shop/products/Strelitzia_Nicolai_150_teelt.png?v=1704118379&width=630'
            ],
            [
                'name' => 'Zamioculcas',
                'description' => 'Lucas de Zamioculcas is dé ideale plant voor mensen met niet zulke groene vingers. Hij heeft zelden dorst en je kan hem bijna overal neerzetten. Deze makkelijke amigo staat beter bekend als de ZZ plant of Emerald palm en komt oorspronkelijk uit Oost Afrika, maar in jouw huiskamer is Lucas ook helemaal het mannetje. De ZZ plant behoort tot de succulent familie en slaat zijn water op in ondergrondse knollen, maar dat had je misschien al gezien aan de glanzende, sterke bladeren, of niet?',
                'price' => 44.95,
                'image' => 'https://www.plantsome.nl/cdn/shop/products/zamio-21-productpage.png?v=1670852879&width=630'
            ],
            [
                'name' => 'Howea forsteriana',
                'description' => 'Als je niet al te groene vingers hebt is Howerd jouw beste vriend! Met zijn luchtige bladeren en hoge statuur past hij eigenlijk overal waar daglicht is, dan nog regelmatig een slokje water en Howerd is helemaal happy. In de volksmond noemen ze hem Kentiapalm, maar zijn officiële plantennaam is Howea forsteriana. Dit stamt af van het Australische ‘Lord Howe Island’, waar hij vandaan komt!',
                'price' => 74.95,
                'image' => 'https://www.plantsome.nl/cdn/shop/products/kentia-24-teelt.png?v=1668598100&width=630'
            ],
            [
                'name' => 'Calathea zebrina',
                'description' => 'De Calathea zebrina is een unieke en opvallende kamerplant die bekend staat om haar prachtige bladpatronen die doen denken aan de strepen van een zebra. Deze bijzondere plant is niet alleen een lust voor het oog, maar heeft ook het vermogen om haar bladeren te sluiten als het donkerder wordt, wat haar de bijnaam "levende plant" heeft opgeleverd. Als je op zoek bent naar een plant die zowel schoonheid als karakter toevoegt aan je ruimte, dan is de Calathea zebrina de perfecte keuze.',
                'price' => 34.95,
                'image' => 'https://www.plantsome.nl/cdn/shop/files/Calathea_Zebrina_P19_teelt_f1ec6b14-0cc4-4234-bf85-f48c8b657012.png?v=1709539036&width=630'
            ],
            [
                'name' => 'Ficus lyrata',
                'description' => 'Hoe kan je de Ficus lyrata (Tabaksplant) het beste verzorgen? Zet deze Tabaksplant op een licht plekje, maar niet in direct zonlicht. Op een te donker plekje zal Eileen snel bladeren verliezen. Om genoeg licht op te kunnen nemen is het handig om af en toe de bladeren van Eileen af te nemen met een vochtige doek. Verder is deze Tabaksplant niet zo’n heftige drinker. En wist je dat deze van origine Afrikaanse plant in het wild tot wel 20 meter hoog groeit? Come on Eileen! ',
                'price' => 169.95,
                'image' => 'https://www.plantsome.nl/cdn/shop/files/IMG-2103_growpot.png?v=1706541816&width=630'
            ],
        ];

        // Insert data into the 'products' table
        
        DB::table('products')->insert($products);
    }
}