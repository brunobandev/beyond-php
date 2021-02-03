<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$numbersByTwoNormalClousure = array_map(function ($x) {
    return $x * 2;
}, $numbers);

print_r($numbersByTwoNormalClousure) . PHP_EOL;

$numbersByTwoShortClosure = array_map(fn ($x): int => $x * 2, $numbers);

print_r($numbersByTwoShortClosure) . PHP_EOL;
