<?php

namespace Command\Command;

interface CommandInterface
{
    public function execute(): void;

    public function undo(): void;
}