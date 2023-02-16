<?php

class car
{
    public $model, $color;

    function __construct($m, $c)
    {
        $this->model = $m;
        $this->color = $c;
    }
}

$car1 = new car("Amaze", "White");
$car2 = new car("Verna", "Black");
$car3 = new car("Nexon", "Gray");

echo $car1->model. " " .$car1->color;
echo "<br>";
echo $car2->model. " " .$car2->color;
echo "<br>";
echo $car3->model. " " .$car3->color;
echo "<br>";
?>