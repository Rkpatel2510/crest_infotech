<?php

    $data1 = [0,1,2,3,4];
    $data2 = ["zero" => 0, "one" => 1, "two" => 2, "three" => 3, "four" => 4];
    $data3 = [ [0,1], [2,[3]] ];

    $data4 = [
        "a" => ["b" => 0,"c" => 1],
        "b" => ["e" => 2,"o" => ["b" => 3]]
    ];

    // echo "<p><h3>Input</h3></P>";
    // echo "<pre>";
    // //print_r($data1);
    // echo "<br>" . "<br>";
    // print_r($data2);
    // echo "<br>" . "<br>";
    // print_r($data3);
    // echo "<br>" . "<br>";
    // print_r($data4);

   

    echo "<p><h3>Output</h3></P>";
    echo "data1 = ".$data1[3];
    echo "<br>" . "<br>";
    echo "data2 = ".$data2["three"];
    echo "<br>" . "<br>";
    echo "data3 = " .$data3[1][1][0];
    echo "<br>" . "<br>";
    echo "data4 = ".$data4["b"]["o"]["b"] ;
?>