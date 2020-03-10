<?php

declare(strict_types=1);

namespace Proxy\Virtual;

class LazyServiceProxy implements ServiceInterface
{
    private HeavyService $service;

    public function doCheapOperation(): void
    {
        if (null === $this->service) {
            $this->service = new HeavyService();
        }

        $this->service->doCheapOperation();
    }
}