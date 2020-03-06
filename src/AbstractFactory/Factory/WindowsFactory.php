<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Button\Button;
use AbstractFactory\Button\WindowsButton;
use AbstractFactory\Checkbox\WindowsCheckbox;
use AbstractFactory\Checkbox\Checkbox;
use AbstractFactory\GUIFactory;

class WindowsFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WindowsCheckbox();
    }
}