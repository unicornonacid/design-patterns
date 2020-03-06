<?php

declare(strict_types=1);

namespace Command\Command;

use Command\LightBulb;

class LightOnCommand implements CommandInterface
{
    private LightBulb $lightBulb;

    public function __construct(LightBulb $lightBulb)
    {
        $this->lightBulb = $lightBulb;
    }

    public function execute(): void
    {
        $this->lightBulb->turnOn();
    }

    public function undo(): void
    {
        $this->lightBulb->turnOff();
    }
}