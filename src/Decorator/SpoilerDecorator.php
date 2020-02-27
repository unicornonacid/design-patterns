<?php

declare(strict_types=1);

namespace Decorator;

class SpoilerDecorator extends AddOnDecorator
{
    public function cost(): int
    {
        return $this->car->cost() + 500;
    }
}