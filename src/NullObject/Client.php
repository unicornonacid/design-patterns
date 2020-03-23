<?php

declare(strict_types=1);

namespace NullObject;

class Client
{
    private ProductRepository $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * NullProduct behaves just as a real Product.
     * There is no need to check if the returned values is null.
     */
    public function display(int $productId): string
    {
        $product = $this->repository->findById($productId);

        return $product->getName();
    }
}