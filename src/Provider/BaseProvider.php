<?php

namespace Leanlink\Provider;

use GuzzleHttp\Client;

abstract class BaseProvider
{
    public const BASE_URL = 'https://app.leanlink.io/public/api/';

    public function __construct(protected Client $client, protected ?string $apiToken)
    {}

    protected function get(string $url)
    {
        $options = [];
        if ($this->apiToken) {
            $options['headers'] = ['X-Auth-Token' => $this->apiToken];
        }

        return $this->client->get($url, $options);
    }

    protected function post(string $url, array $data)
    {
        $options = [
            'json' => $data,
        ];
        if ($this->apiToken) {
            $options['headers'] = ['X-Auth-Token' => $this->apiToken];
        }

        return $this->client->post($url, $options);
    }
}
