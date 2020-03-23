<?php

declare(strict_types=1);

namespace Iterator;

class Client
{
    private Collection $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function trivialExample(): void
    {
        /**
         * Very simple implementation of Iterator pattern.
         * Iterator could traverse the collection in a more complex way.
         */
        $iterator = $this->collection->getIterator();

        while ($element = $iterator->next()) {
            //TODO do some stuff with the element
        }
    }
}