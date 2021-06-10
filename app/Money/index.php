<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Brick\Money\Money;

function printMoney($prefixMoney, $money)
{
    printf("{$prefixMoney}: %s", $money);
    echo '<br>';
}

/* here wil print the money WITH currency as second parameter, NOTE that you should pass correct current */
printMoney('Money', Money::of(50, 'USD'));
/* also you can first parameter as string and in floating point */
printMoney('Money', Money::of('19.9', 'EUR'));
/* also you can create a Money from a number of "minor units" (cents), using the ofMinor() method */
printMoney('Money', Money::ofMinor(1234, 'GBP'));

$money = Money::of(30, 'USD');

/* you can also add number to money */
printMoney('Money After Add 4.99', $money->plus('4.99'));
/* you can also subtract number from money */
printMoney('Money After Subtract 1', $money->minus(1));
/* you can also multiply number by money, Note that if you pass number WITH four floating pointes will triggere an ERROR */
printMoney('Money After Multiply By 1.999', $money->multipliedBy('1.999'));
/* you can also divide number by money */
printMoney('Money After Divide By 4', $money->dividedBy(4));

