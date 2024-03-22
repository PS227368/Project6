<?php

namespace App;

use GuzzleHttp\Client;
use App\apiController;

class KuinApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://kuin.summaict.nl/api/',
            'timeout'  => 5, // timeout in seconds
        ]);
    }

    public function getProduct($productId)
    {
        $response = $this->client->get("product/{$productId}");
        return json_decode($response->getBody()->getContents(), true);
    }

}
