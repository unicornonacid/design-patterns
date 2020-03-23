<?php

declare(strict_types=1);

namespace State\OrderState;

class Processing implements State
{
    public function paymentAccepted(): State
    {
        return Factory::processing();
    }

    public function paymentDeclined(): State
    {
        return Factory::processing();
    }

    /**
     * @throws \Exception
     */
    public function cancel(): State
    {
        throw new \Exception('For some reason you cannot cancel the order in this state');
    }
}