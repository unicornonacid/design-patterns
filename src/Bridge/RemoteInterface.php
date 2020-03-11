<?php

namespace Bridge;

interface RemoteInterface
{
    public function togglePower(): void;

    public function volumeDown(): void;

    public function volumeUp(): void;

    public function channelDown(): void;

    public function channelUp(): void;

    public function mute(): void;
}