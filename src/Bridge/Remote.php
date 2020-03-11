<?php

declare(strict_types=1);

namespace Bridge;

use Bridge\Device\DeviceInterface;

class Remote implements RemoteInterface
{
    private DeviceInterface $device;

    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function togglePower(): void
    {
        $this->device->isEnabled() ? $this->device->disable() : $this->device->enable();
    }

    public function volumeDown(): void
    {
        $this->device->setVolume(
            $this->device->getVolume() - 1
        );
    }

    public function volumeUp(): void
    {
        $this->device->setVolume(
            $this->device->getVolume() + 1
        );
    }

    public function channelDown(): void
    {
        $this->device->setChannel(
            $this->device->getChannel() - 1
        );
    }

    public function channelUp(): void
    {
        $this->device->setChannel(
            $this->device->getChannel() + 1
        );
    }

    public function mute(): void
    {
        $this->device->setVolume(0);
    }
}