<?php

declare(strict_types=1);

namespace Observer;

class EventManager implements ObservableInterface
{
    /**
     * @var ObserverInterface[]
     */
    private array $observers;

    public function add(ObserverInterface $observer): void
    {
        // TODO: Implement add() method.
    }

    public function remove(ObserverInterface $observer): void
    {
        // TODO: Implement remove() method.
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}