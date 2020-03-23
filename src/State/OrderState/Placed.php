<?php

declare(strict_types=1);

namespace State\OrderState;

class Placed implements State
{
    public function paymentAccepted(): State
    {
        return Factory::processing();
    }

    public function paymentDeclined(): State
    {
        return Factory::placed();
    }

    public function cancel(): State
    {
        return Factory::canceled();
    }
}