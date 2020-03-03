<?php

declare(strict_types=1);

namespace FactoryMethod\Dialog;

use FactoryMethod\Button\Button;
use FactoryMethod\Button\WindowsButton;

class WindowsDialog extends Dialog
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }
}