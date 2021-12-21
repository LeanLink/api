<?php

namespace Leanlink;

use GuzzleHttp\Client;
use Leanlink\Provider\ResourceProvider;

class Leanlink
{
    public function __construct(private Client $client)
    {
    }

    public function resources(?string $apiToken = null): ResourceProvider
    {
        return new ResourceProvider($this->client, $apiToken);
    }
}
