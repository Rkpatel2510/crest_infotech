<?php
$employee = [
    ["id" => 25, "Name" => "Raxit"],
    ["id" => 27, "Name" => "Vidhi"],
    ["id" => 24, "name" => "Pooja",],
    ["id" => 26, "name" => "Vivek",]

];

$empdata = [
    "25" => ["salary" => 30000, "bonus" => 100000],
    "24" => ["salary" => 20000, "bonus" => 5000],
    "27" => ["salary" => 25000, "bonus" => 4000],
    "26" => ["salary" => 15000, "bonus" => 2000]
];

echo "<pre>";
print_r($employee);
print_r($empdata);


foreach ($employee as $key => $val) {
    //   print_r($val);
    $employee[$key]['bonus'] = $empdata[$val['id']]['bonus'];       //Get data by Calling 'id'
    $employee[$key]['total'] = abs($empdata[$val['id']]['salary'] + $empdata[$val['id']]['bonus']);
}
echo "<p><h3>Output</h3></P>";
print_r($employee);

?>