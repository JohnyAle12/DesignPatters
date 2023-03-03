<?php

use App\Calculator;
use App\Strategies\AdditionStrategy;
use App\Strategies\SubtractionStrategy;

require 'vendor/autoload.php';

//* Notes: Inside this example we can set the strategy from constructor method or set method
//* Also was implemented a magic method __call to have the addition and subtraction method and create the instance from them own strategy class
//* Strategy pattern implement the open close and dependency inversion principles
//* because the method execute is closed in its behavior operation and the main class doesn't depend of the strategy classes

$additionStrategy = new AdditionStrategy();
$subtractionStrategy = new SubtractionStrategy();

$calculator = new Calculator();

$calculator->setOperation($subtractionStrategy);

// $result = $calculator->execute(10, 4);
// $result = $calculator->addition(10, 4);
// $result = $calculator->subtraction(10, 4);
$result = $calculator->multiplication(10, 4);

var_dump($result);