<?php

declare(strict_types=1);

namespace Adapter;

use Adapter\Http\HttpClientInterface;

class Service
{
    private HttpClientInterface $client;

    public function concreteGet()
    {
        $this->client->get();
    }

    public function concretePost()
    {
        $this->client->post();
    }

    public function concretePut()
    {
        $this->client->put();
    }

    public function concreteDelete()
    {
        $this->client->delete();
    }
}