<?php
    $data = [
	['name' => 'jay','city' => 'Ahmedabad'],
	['name' => 'meet','city' => 'Surat',],
    ['name' => 'jeet','city' => 'Ahmedabad'],

];

echo "<pre>";
echo "<p><h3>Input</h3></P>";
$newArr=[];
foreach($data as $val){
//    print_r($val);
    $newArr[$val['city']][]=$val['name'];
    print_r($val);
}
echo "<pre>";
echo "<p><h3>Output</h3></P>";
print_r($newArr);

?>