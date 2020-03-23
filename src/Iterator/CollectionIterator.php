<?php

declare(strict_types=1);

namespace Iterator;

class CollectionIterator implements IteratorInterface
{
    private Collection $collection;
    private int $currentIndex;

    public function __construct(
        Collection $collection
    ) {
        $this->collection = $collection;
        $this->currentIndex = 0;
    }

    public function hasNext(): bool
    {
        return $this->currentIndex < $this->collection->getSize();
    }

    public function next(): ?object
    {
        if ($this->hasNext()) {
            return $this->collection->getElements()[$this->currentIndex++];
        }

        return null;
    }
}