<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class FatoorahService
{

    public $request_client;
    public $base_url;
    public $headers;

    public function __construct(Client $client)
    {
        $this->request_client = $client;

        $this->base_url = env('BASE_URL');

        $this->headers = [
            'Content-Type' => 'appLication/json',
            'Authorization' => 'Bearer ' . env('TOKEN'),
        ];
    }

    public function createPayment($method, $url, $data)
    {

        $request = new Request($method, $this->base_url . $url, $this->headers);

        $response = $this->request_client->send($request, [
            'json' => $data
        ]);

        if ($response->getStatusCode() != 200) {
            return false;
        }
        dump($response, $response->getBody());
        // $json = json_decode($response->getBody(), true);
        // return $json;
    }
}
