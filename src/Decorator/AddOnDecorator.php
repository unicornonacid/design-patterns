<?php

declare(strict_types=1);

namespace Decorator;

class AddOnDecorator implements Car
{
    protected Car $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function cost(): int
    {
        return $this->car->cost();
    }
}