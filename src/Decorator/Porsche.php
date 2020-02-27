<?php

declare(strict_types=1);

namespace Decorator;

class Porsche implements Car
{
    public function cost(): int
    {
        return 10000;
    }
}