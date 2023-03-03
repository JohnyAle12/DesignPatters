<?php

namespace App\Stages;

use App\Base\Operation;
use App\Transaction;

class MultipleOfFifty extends Operation
{
    public function process(Transaction $transaction): void
    {
        if($transaction->amount % 50 !== 0){
            echo "The amount should be multiple of $50 \n";
            return;
        }

        $this->next($transaction);
    }
}