<?php

namespace FactoryMethod\Button;

interface Button
{
    public function render(): void;

    public function onClick(): void;
}