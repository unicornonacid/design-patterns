<?php

declare(strict_types=1);

namespace Strategy;

use Strategy\HardDisk\HardDiskInterface;
use Strategy\Processor\ProcessorInterface;

/**
 * The context defines the interface of interest to clients.
 */
class Computer
{
    private ProcessorInterface $processor;
    private HardDiskInterface $hardDisk;

    public function __construct(ProcessorInterface $processor, HardDiskInterface $hardDisk)
    {
        $this->processor = $processor;
        $this->hardDisk = $hardDisk;
    }

    public function process(): void
    {
        $this->processor->process();
    }

    public function store(): void
    {
        $this->hardDisk->store();
    }
}