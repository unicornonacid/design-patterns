<?php

declare(strict_types=1);

namespace NullObject;

class Product implements ProductInterface
{
    public function getName(): string
    {
        return 'Sock';
    }
}