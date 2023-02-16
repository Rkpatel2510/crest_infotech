<?php
    $first = [
        0 => ['user_name' => 'test1'],
        1 => ['user_name' => 'test2'],
        2 => ['user_name' => 'test3']
    ];
    
    $second = [
        0 => ['guj' => 50,'eng' => 50,'math' => 50],
        1 => ['guj' => 10,'eng' => 40,'math' => 50],
        2 => ['guj' => 20,'eng' => 20,'math' => 20]
    ];

    echo "<pre>";
    echo "<p><h3>Input</h3></P>";
    print_r($first);
    print_r($second);
    
    foreach($second as $val){
        $arr[] = array_sum($val); // Sum of second array using aray_sum function
}
    foreach($first as $key => $val) {
    $first[$key]['abc']=$arr[$key];
}
echo "<p><h3>Output</h3></P>";
print_r($first);

?>