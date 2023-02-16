<?php
//find the sum of all elements the below array

$data1 = [0, 1, 2, 3, 4, 5, 6];
$a = array_sum($data1);
print_r("Sum of data1 : ".$a);
echo "<br>";

$data2 = ['0', '1', '2', '3', '4', '5', '6'];
$b = array_sum($data2);
print_r("Sum of data2 : ".$b);
echo "<br>";

$data3 = [0, 1, 2, 3, 4, 5, 6, '0', '1', '2', '3', '4', '5', '6'];
$c = array_sum($data3);
print_r("Sum of data3 : ".$c);
echo "<br>";

$data4 = [0, 1, 2, 3, 4, 5, 6, '0', '1', '2', '3', '4', '5', '6', 'a', 'b', 'c']; 
$d = array_sum($data4);
print_r("Sum of data4 : ".$d);
echo "<br>";



?>