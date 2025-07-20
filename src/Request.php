<?php declare(strict_types=1);

namespace CloudFactorHQ\Sentinel;

use GuzzleHttp\Client;

class Request
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'headers' => $this->getHeaders(),
        ]);
    }

    public function post(string $uri, array $payload)
    {
        return $this->client->request('POST', $uri, ['json' => $payload]);
    }

    protected function getHeaders()
    {
        $configuredVcs = (new VcsManager)->getConfiguredVcs();

        return $configuredVcs->getRequestHeaders();
    }
}
