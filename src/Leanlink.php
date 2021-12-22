<?php

namespace Leanlink;

use GuzzleHttp\Client;
use Leanlink\Provider\ResourceProvider;
use Leanlink\Provider\TimelineProvider;

class Leanlink
{
    public function __construct(private Client $client)
    {
    }

    public function resources(?string $apiToken = null): ResourceProvider
    {
        return new ResourceProvider($this->client, $apiToken);
    }

    public function timeline(?string $apiToken = null): TimelineProvider
    {
        return new TimelineProvider($this->client, $apiToken);
    }
}
