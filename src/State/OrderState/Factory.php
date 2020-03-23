<?php

declare(strict_types=1);

namespace State\OrderState;

class Factory
{
    public static function placed(): State
    {
        return new Placed();
    }

    public static function processing(): State
    {
        return new Processing();
    }

    public static function canceled(): State
    {
        return new Canceled();
    }
}