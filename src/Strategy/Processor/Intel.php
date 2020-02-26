<?php

declare(strict_types=1);

namespace Strategy\Processor;

/**
 * Concrete strategies implement the algorithm while following
 * the base strategy interface. The interface makes them
 * interchangeable in the context.
 */
class Intel implements ProcessorInterface
{
    public function process(): void
    {
        // TODO: Implement process() method.
    }
}