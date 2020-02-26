<?php

declare(strict_types=1);

namespace Strategy\HardDisk;

/**
 * The strategy interface declares operations common to all
 * supported versions of some algorithm. The context uses this
 * interface to call the algorithm defined by the concrete
 * strategies.
 */
interface HardDiskInterface
{
    public function store(): void;
}