<?php

namespace Adapter\Http;

interface HttpClientInterface
{
    public function get();

    public function post();

    public function put();

    public function delete();
}