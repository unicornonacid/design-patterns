<?php

declare(strict_types=1);

namespace FactoryMethod\Dialog;

use FactoryMethod\Button\Button;
use FactoryMethod\Button\HtmlButton;

class WebDialog extends Dialog
{
    public function createButton(): Button
    {
        return new HtmlButton();
    }
}