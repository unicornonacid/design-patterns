<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Button\Button;
use AbstractFactory\Button\HtmlButton;
use AbstractFactory\Checkbox\Checkbox;
use AbstractFactory\Checkbox\HtmlCheckbox;
use AbstractFactory\GUIFactory;

class WebFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new HtmlButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new HtmlCheckbox();
    }
}