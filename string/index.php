<?php
//string and its functions
$str = "Jhon";
echo strlen(string: $str);
$str_hello = "Hello World";
echo strtoupper($str_hello) . "\n";
echo strpos($str_hello, "World") . "\n";
echo str_replace("Hello", "Dolli", $str_hello) . "\n";
echo strrev($str_hello);
$strar = explode(" ", $str_hello);
print_r($strar);

echo substr($str, 2, 2);
echo PHP_INT_MAX;