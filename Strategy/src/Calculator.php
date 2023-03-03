<?php

namespace App;

use App\Interfaces\Operation;
use App\Strategies\AdditionStrategy;

class Calculator
{
    protected Operation $operation;

    public function __construct(Operation $operation = null)
    {
        $this->operation = $operation ?? new AdditionStrategy();
    }

    public function execute(int $a, int $b): int
    {
        return $this->operation->doOperation($a, $b);
    }
    
    public function setOperation(Operation $operation): void
    {
        $this->operation = $operation;
    }

    //* This is a magic method, allow to execute methods don't defined in the class
    public function __call($method, $arguments)
    {
        $classname = 'App\\Strategies\\'.ucfirst($method) . 'Strategy';
        [$a, $b] = $arguments;

        $this->setOperation(new $classname);
        return $this->execute($a, $b);
    }

}