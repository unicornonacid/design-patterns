<?php

declare(strict_types=1);

namespace Command\Command;

use Command\LightBulb;

class LightOffCommand implements CommandInterface
{
    private LightBulb $lightBulb;

    public function __construct(LightBulb $lightBulb)
    {
        $this->lightBulb = $lightBulb;
    }

    public function execute(): void
    {
        $this->lightBulb->turnOff();
    }

    public function undo(): void
    {
        $this->lightBulb->turnOn();
    }
}