<?php

$frd=["Nikhil",["Het","Krunal"],"Raxit"];

echo "<pre>";
print_r($frd);

echo "<h2>Output</h2>";
$newarr=[];
// foreach ($frd[1] as $key => $value) {
//    $newarr[]= [$frd[0],$value,$frd[2]];
// }

foreach ($frd[1] as $key => $value) {
    $newarr[$key][0] = [$frd[0] + $frd[2]];
    $newarr[]= $value . ",";
}
echo implode($newarr);

?>