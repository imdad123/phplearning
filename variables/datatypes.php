<?php
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

//daynamic variable
$foo = "Bar"; // Assign the string "Bar" to the variable $foo
$$foo = "Hello, dynamic variable!";
echo $foo . "${$foo}";

//type casting
$str = (int)"20";
var_dump($str);