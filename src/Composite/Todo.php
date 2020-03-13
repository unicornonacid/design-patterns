<?php

declare(strict_types=1);

namespace Composite;

class Todo implements Element
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function toHtml(): string
    {
        return '<li>' . $this->text . '</li>';
    }
}