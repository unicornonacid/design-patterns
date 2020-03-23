<?php

namespace Iterator;

interface IterableInterface
{
    public function getIterator(): IteratorInterface;
}