<?php

declare(strict_types=1);

namespace Adapter\Http;

use Adapter\Library\HttpClient;

class LibraryHttpClientAdapter implements HttpClientInterface
{
    private HttpClient $innerClient;

    public function get()
    {
        $this->innerClient->get();
    }

    public function post()
    {
        $this->innerClient->post();
    }

    public function put()
    {
        $this->innerClient->put();
    }

    public function delete()
    {
        $this->innerClient->delete();
    }
}