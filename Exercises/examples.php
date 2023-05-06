<?php

function calculate(array $values)
{
    $sum = 0;
    foreach($values as $value){
        if($value === 8){
            $sum += 5;
        }

        if($value%2 === 0 && $value !== 8){
            $sum += 1;
        }

        if($value%2 !== 0){
            $sum += 3;
        }
    }

    return $sum;
}

// echo calculate([1,2,3,4,5]);
// echo calculate([15,25,35]);
// echo calculate([8,8]);

function letterCounter(string $text)
{
    $result = '';
    $texto = strtolower($text);
    $array = str_split($texto);
    $doubles = [];

    foreach($array as $val){

        if($val === ' ') continue;
        if(in_array($val, $doubles)) continue;

        $ast = '';
        for ($i=0; $i < substr_count($texto, $val); $i++) {
            $ast .= '*';
            $doubles[] = $val;
        }

        $result .= $val.':'.$ast.',';
    }

    return substr($result, 0, -1);
}

function letterCounterTwo(string $text){
    $str = strtolower(str_replace(' ', '', $text));
    $values = array_count_values(str_split($str));

    $result = array_map(
        fn($item, $count) => $item.':'. str_repeat('*', $count),
        array_keys($values),
        $values
    );

    return implode(',', $result);
}

echo letterCounter('Test Gorilla')."\n";
echo letterCounterTwo('Test Gorilla');


