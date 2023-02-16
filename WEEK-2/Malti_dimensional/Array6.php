<?php

$a=[1,2,3,4,5];

$sum = 0;
foreach ($a as $key => $value) {
    //print_r($value);
     $sum += $value;
}
print_r($sum);
?>