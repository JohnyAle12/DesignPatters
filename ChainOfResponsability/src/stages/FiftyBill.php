<?php

namespace App\Stages;

use App\Base\Operation;
use App\Transaction;

class FiftyBill extends Operation
{
    public function process(Transaction $transaction): void
    {
        if($transaction->amount < 50){
            $this->next($transaction);
            return;
        }

        $bills = intval($transaction->amount / 50);
        $remain = $transaction->amount % 50;

        echo "Gave you $50 bills: {$bills} \n";

        if($remain !== 0){
            $transaction->amount = $remain;
            $this->next($transaction);
        }
    }
}