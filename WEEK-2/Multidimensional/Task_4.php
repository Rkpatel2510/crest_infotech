<?php

//input 1
$keys = [
    "field1" => "first",
    "filed2" => "second",
    "field3" => "third"
];

//input 2
$values = [
    "field1values" => "dinosaur",
    "field2values" => "pig",
    "field3values" => "platypus"
];

$output = [
    "first" => "dinosuar",
    "second" => "pig",
    "third" => "platypus"
];
echo "<pre>";
print_r($keys);
print_r($values);
echo "</pre>";

echo "<h3>Output</h3>";

echo "<pre>";

$a = array_values($keys);
$b = array_values($values);

$c = array_combine($a,$b);
print_r($c);
?>