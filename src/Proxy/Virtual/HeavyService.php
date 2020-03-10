<?php

declare(strict_types=1);

namespace Proxy\Virtual;

class HeavyService implements ServiceInterface
{
    /**
     * HeavyService constructor.
     * Let's assume some really heavy calculation is done here.
     */
    public function __construct()
    {
    }

    public function doCheapOperation(): void
    {
        // TODO: Implement doCheapOperation() method.
    }
}