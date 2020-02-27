<?php

declare(strict_types=1);

namespace Observer;

class Editor
{
    private EventManager $eventManager;

    public function __construct(EventManager $eventManager)
    {
        $this->eventManager = $eventManager;
    }

    public function doSomething(): void
    {
        // do the actual stuff
        $this->eventManager->notify();
    }
}