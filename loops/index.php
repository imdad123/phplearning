<?php
// $i = 1;
// while ($i < 6) {
//     //echo $i;
//     $i++;
// }



$i = 1;

do {
    echo $i;
    $i++;
} while ($i < 6);

for ($i = 0; $i  < 5; $i++) {
    echo "$i * 2 = " . $i * 2;
}

$arr = ["car1", "car2", "car3", "car4"];
foreach ($arr as $k => $v) {
    echo $k . "" . $v . "";
}

//by refrence

foreach ($arr as $k => &$v) {
    if ($v == "car1") $v = "toyota";
}
print_r($arr);