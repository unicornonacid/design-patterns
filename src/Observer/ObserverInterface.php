<?php

declare(strict_types=1);

namespace Observer;

interface ObserverInterface
{
    public function update(): void;
}