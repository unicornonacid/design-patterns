<?php

declare(strict_types=1);

namespace State;

use State\OrderState\Factory;
use State\OrderState\State;

class Order
{
    private State $state;

    public function __construct()
    {
        $this->state = Factory::placed();
    }

    public function paymentAccepted(): void
    {
        $this->state = $this->state->paymentAccepted();
    }

    public function paymentDeclined(): void
    {
        $this->state = $this->state->paymentDeclined();
    }

    public function cancel(): void
    {
        $this->state = $this->state->cancel();
    }
}