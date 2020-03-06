<?php

declare(strict_types=1);

namespace Command;

use Command\Command\CommandInterface;

class Remote
{
    private CommandInterface $lightOn;
    private CommandInterface $lightOff;

    public function __construct(CommandInterface $lightOn, CommandInterface $lightOff)
    {
        $this->lightOn = $lightOn;
        $this->lightOff = $lightOff;
    }

    public function onButtonOnPressed(): void
    {
        $this->lightOn->execute();
    }

    public function onButtonOffPressed(): void
    {
        $this->lightOff->execute();
    }
}