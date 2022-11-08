<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Brick\Money\Money;

function printMoney($prefixMoney, $money)
{
    printf("{$prefixMoney}: %s", $money);
    echo '<br>';
}

// Printing the money with currency as second parameter, NOTE that: you should pass correct current
printMoney('Money', Money::of(50, 'USD'));

// You can pass first parameter as a string or floating point
printMoney('Money', Money::of('19.9', 'EUR'));

// Creating a Money from a number of "minor units" (cents), using the `ofMinor` method
printMoney('Money', Money::ofMinor(1234, 'GBP'));

$money = Money::of(30, 'USD');

// Adding number to money also
printMoney('Money After Add 4.99', $money->plus('4.99'));

// Subtracting number from money also
printMoney('Money After Subtract 1', $money->minus(1));

// You can multiply number by money
// Note that: if you pass number with four floating pointes will triggere an `ERROR`
printMoney('Money After Multiply By 1.999', $money->multipliedBy('1.999'));

// Dividing number by money
printMoney('Money After Divide By 4', $money->dividedBy(4));
