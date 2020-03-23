<?php

declare(strict_types=1);

namespace NullObject;

class ProductRepository
{
    public function findById(int $id): ProductInterface
    {
        /**
         * If product was found return Product.
         * If not, return NullProduct
         */
        return new NullProduct();
    }
}