<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$numbersByTwoNormalClousure = array_map(function ($x) {
    return $x * 2;
}, $numbers);

print_r($numbersByTwoNormalClousure) . PHP_EOL;

$numbersByTwoShortClosure = array_map(fn ($x): int => $x * 2, $numbers);

print_r($numbersByTwoShortClosure) . PHP_EOL;

/**
 * Short Closures:
 * They are available as of PHP 7.4
 * They start with the fn keyword
 * They can only have one expression, which is the return statement
 * No return keyword allowed
 * Arguments and return types can be type hinted
 * https://stitcher.io/blog/short-closures-in-php
 */
