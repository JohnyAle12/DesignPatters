<?php

namespace App\Base;

use App\Transaction;

abstract class Operation
{
    protected Operation $operation;

    public function then(Operation $operation): void
    {
        $this->operation = $operation;
    }

    public function next(Transaction $transaction): void
    {
        if($this->operation){
            $this->operation->process($transaction);
        }
    }

   abstract public function process(Transaction $transaction): void;
}