<?php

namespace Iterator;

interface IteratorInterface
{
    public function hasNext(): bool;

    public function next(): ?object;
}