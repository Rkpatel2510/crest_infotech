<?php

    function number(int $mob){
        echo $mob ."<br>";
    }

    $mob = 9173961861;
    number($mob);

    function hello(array $arr){
        foreach ($arr as $array) {
            echo $array;
        }
    }

    $array = ["Raxit", " Kotadiya"];
    hello($array);
    echo "<br>";

    function floa(float $flo){
        echo $flo;
    }

    $flo = 25.27;
    floa($flo);
?>