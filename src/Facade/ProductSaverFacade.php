<?php

declare(strict_types=1);

namespace Facade;

class ProductSaverFacade
{
    private ProductValidator $validator;
    private ProductSaver $saver;

    public function __construct(ProductValidator $validator, ProductSaver $saver)
    {
        $this->validator = $validator;
        $this->saver = $saver;
    }

    public function save(Product $product)
    {
        $this->validator->validate($product);;
        $this->saver->save($product);
    }
}