<?php

declare(strict_types=1);

namespace Observer;

interface ObservableInterface
{
    public function add(ObserverInterface $observer): void;

    public function remove(ObserverInterface $observer): void;

    public function notify(): void;
}