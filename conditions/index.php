<?php

$a = 10;

if ($a  > 5 and $a <= 10) {
    echo "True";
} else {
    echo "False";
}
$day = "Monday";

if ($day == "Tuesday") {
    echo "Tuesday";
} else if ($day == "Monday") {
    echo "Monday";
} else {
    echo "Off";
}
switch ($a) {
    case 1:
        echo "1";
        break;
    case 2:
    case 10:
        echo "2";
        break;
    default:
        echo "Nothing";
}