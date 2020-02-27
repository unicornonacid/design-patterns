<?php

declare(strict_types=1);

namespace Decorator;

class NavigationDecorator extends AddOnDecorator
{
    public function cost(): int
    {
        return $this->car->cost() + 300;
    }
}