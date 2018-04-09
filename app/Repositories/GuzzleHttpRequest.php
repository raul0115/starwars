<?php 
namespace App\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest{

    protected $client;

    public function __construct(Client $client){
        $this->client = $client;
    }

    protected function get($url){
        $response= $this->client->request('GET',$url);
        $response = json_decode($response->getBody()->getContents());
        return $response;

    }
}