<?php

declare(strict_types=1);

namespace Iterator;

class Collection implements IterableInterface
{
    private array $elements;

    /**
     * Collection constructor.
     * @param Element[] $elements
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function getIterator(): IteratorInterface
    {
        return new CollectionIterator($this);
    }

    /**
     * @return Element[]
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    public function getSize(): int
    {
        return count($this->elements);
    }
}