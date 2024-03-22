<?php

namespace App;

use GuzzleHttp\Client;

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

    public function getProductList()
    {
        $response = $this->client->get("product");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getProduct($productId)
    {
        $response = $this->client->get("product/{$productId}");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function searchProduct($search)
    {
        $response = $this->client->get("product/search/{$search}");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getOrderList()
    {
        $response = $this->client->get("order");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getOrder($orderId)
    {
        $response = $this->client->get("order/{$orderId}");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getOrderItems($orderId)
    {
        $response = $this->client->get("orderItem?order_id={$orderId}");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function requestOrderItem($productId, $quantity, $orderId = null)
    {
        $data = [
            'product_id' => $productId,
            'quantity' => $quantity
        ];

        if ($orderId) {
            $data['order_id'] = $orderId;
        }

        $response = $this->client->post("orderItem", [
            'json' => $data
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}