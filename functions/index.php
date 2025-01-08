<?php

declare(strict_types=1);
function test()
{
    echo "Test";
}
test();
$fName = "test";
function familyName(&$name)
{
    $name = "Testing";
    echo "Family Name is :" . $name;
}

familyName($fName);
echo $fName;

//variadic function

function sum(...$args)
{
    $sum = 0;
    foreach ($args as $arg) {
        echo "\n" . $arg . "";
        $sum += $arg;
    }
    echo "\n Sum" . $sum;
}
sum(1, 2, 3, 4, 5, 6);

function check_Types(int $a, int $b)
{
    echo $a . "" . $b . "";
}
check_Types(2, 3);