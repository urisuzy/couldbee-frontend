<?php

namespace App\Traits;

trait ApiRequester
{

    public function request($method, $uri, $query)
    {
        $client = new \GuzzleHttp\Client([
            'defaults' => [
                'verify' => false
            ],
            'base_uri' => 'http://couldbee-api.urisuzy.com/api/',
        ]);

        try {
            $res = $client->request($method, $uri, [
                'query' => $query,
                'headers' => [
                    'token' => config('app.token_api')
                ]
            ]);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return $responseBodyAsString;
        }
        return json_decode($res->getBody());
    }
}
