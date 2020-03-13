<?php

declare(strict_types=1);

namespace TemplateMethod\ORM;

abstract class Record
{
    public function save(): void
    {
        $this->beforeSave();
        // do actual save to database
        $this->afterSave();
    }

    abstract public function beforeSave(): void;

    abstract public function afterSave(): void;
}