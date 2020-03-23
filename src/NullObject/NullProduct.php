<?php

declare(strict_types=1);

namespace NullObject;

class NullProduct implements ProductInterface
{
    public function getName(): string
    {
        return '';
    }
}