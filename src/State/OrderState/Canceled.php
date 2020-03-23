<?php

declare(strict_types=1);

namespace State\OrderState;

class Canceled implements State
{
    public function paymentAccepted(): State
    {
        return Factory::canceled();
    }

    public function paymentDeclined(): State
    {
        return Factory::canceled();
    }

    public function cancel(): State
    {
        return Factory::canceled();
    }
}