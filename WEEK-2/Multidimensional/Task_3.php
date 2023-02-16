<?php

$input = 3;

$output = [
    "a" => "a",
    "b" => "b",
    "c" => "c"
];

$input = 6;

$output = [
    "a" => "a",
    "b" => "b",
    "c" => "c",
    "d" => "d",
    "e" => "e",
    "f" => "f"
];

$a = range('a', 'z');  
echo "<pre>";

$n = 3;//Input
$newarr = [];
for ($i = 0; $i < $n; $i++) {
    $newarr[$a[$i]] = $a[$i];
}
print_r($newarr);

$n = 6;//Input
$newarr = [];
for ($i = 0; $i < $n; $i++) {
    $newarr[$a[$i]] = $a[$i];
}
print_r($newarr);
?>