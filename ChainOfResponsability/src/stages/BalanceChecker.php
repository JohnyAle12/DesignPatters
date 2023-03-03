<?php

namespace App\Stages;

use App\Base\Operation;
use App\Transaction;

class BalanceChecker extends Operation
{
    public function process(Transaction $transaction): void
    {
        if($transaction->amount > $transaction->balance){
            echo "You don't have enough money\n";
            return; 
        }

        $this->next($transaction);
    }
}