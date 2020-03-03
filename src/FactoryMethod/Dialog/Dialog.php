<?php

namespace FactoryMethod\Dialog;

use FactoryMethod\Button\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function render()
    {
        $button = $this->createButton();
        $button->onClick();
        $button->render();
    }
}