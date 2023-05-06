<?php

function lcwords($str) {
    $temp = '';
    $words = explode(' ', $str);

    foreach ($words as $word) {
        $word = ' ' . lcfirst($word);
        $temp .= $word;
    }
    die($temp);
    return ltrim($temp);
}

$str = "Hello World Asd";
echo lcwords(strtoupper($str));
