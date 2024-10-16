<?php

class Math
{
    public function getInteger(int|float $x): int
    {
        return match(true) {
            is_int($x) => $x,
            $x - floor($x) >= .5 => ceil($x),
            ceil($x) - $x > .5 => floor($x),
        };
    }
}

$math = new Math();

$x1 = 3.2;
$x2 = 1;
$x3 = .4;

echo "Für $x1: " . $math->getInteger($x1) . PHP_EOL;
echo "Für $x2: " . $math->getInteger($x2) . PHP_EOL;
echo "Für $x3: " . $math->getInteger($x3) . PHP_EOL;