<?php

namespace App;

use App\Interface\PaymentProcesor;

class Store
{
    public function __construct(
        protected PaymentProcesor $paymentProcesor
    ){}
    
    public function process()
    {
        $this->paymentProcesor->getClientInformation();
        $this->paymentProcesor->processPayment();
    }
}   