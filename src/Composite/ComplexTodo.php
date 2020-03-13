<?php

declare(strict_types=1);

namespace Composite;

class ComplexTodo implements Element
{
    private string $title;

    /** @var Element[] */
    private array $todos;

    public function __construct(string $title, array $todos)
    {
        $this->title = $title;
        $this->todos = $todos;
    }

    public function toHtml(): string
    {
        $html = '<h1>' . $this->title . '</h1>';
        $html .= '<ul>';
        foreach ($this->todos as $todo) {
            $html .= $todo->toHtml();
        }
        $html .= '</ul>';

        return $html;
    }
}