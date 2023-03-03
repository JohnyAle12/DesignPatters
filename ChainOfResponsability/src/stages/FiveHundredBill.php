<?php

namespace App\Stages;

use App\Base\Operation;
use App\Transaction;

class FiveHundredBill extends Operation
{
    public function process(Transaction $transaction): void
    {
        if($transaction->amount < 500){
            $this->next($transaction);
            return;
        }

        $bills = intval($transaction->amount / 500);
        $remain = $transaction->amount % 500;

        echo "Gave you $500 bills: {$bills} \n";

        if($remain !== 0){
            $transaction->amount = $remain;
            $this->next($transaction);
        }
    }
}