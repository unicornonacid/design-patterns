<?php

declare(strict_types=1);

namespace Strategy\HardDisk;

/**
 * Concrete strategies implement the algorithm while following
 * the base strategy interface. The interface makes them
 * interchangeable in the context.
 */
class HDD implements HardDiskInterface
{
    public function store(): void
    {
        // TODO: Implement store() method.
    }
}