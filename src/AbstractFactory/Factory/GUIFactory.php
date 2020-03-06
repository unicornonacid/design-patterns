<?php

namespace AbstractFactory;

use AbstractFactory\Button\Button;
use AbstractFactory\Checkbox\Checkbox;

interface GUIFactory
{
    public function createButton(): Button;

    public function createCheckbox(): Checkbox;
}