<?php

namespace State\OrderState;

interface State
{
    public function paymentAccepted(): State;

    public function paymentDeclined(): State;

    public function cancel(): State;
}