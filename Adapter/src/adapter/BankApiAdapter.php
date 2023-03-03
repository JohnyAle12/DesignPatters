<?php

namespace App\Adapter;

use App\Apis\BankApi;
use App\Interface\PaymentProcesor;

class BankApiAdapter implements PaymentProcesor
{
    public function __construct(
        protected BankApi $bankApi
    ){}

    public function getClientInformation(): void
    {
        $this->bankApi->getClientInformation();
    }

    public function processPayment(): void
    {
        $this->bankApi->chargeAmount();
    }
}