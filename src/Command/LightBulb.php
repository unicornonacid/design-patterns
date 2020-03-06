<?php

declare(strict_types=1);

namespace Command;

class LightBulb
{
    private const STATE_ON = 'on';
    private const STATE_OFF = 'off';
    private string $state;

    public function __construct()
    {
        $this->state = self::STATE_OFF;
    }

    public function turnOn(): void
    {
        $this->state = self::STATE_ON;
    }

    public function turnOff(): void
    {
        $this->state = self::STATE_OFF;
    }
}