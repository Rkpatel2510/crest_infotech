<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>

<body>
    <?php
    //pi function
    echo (pi()) . "<br>";
    echo "<br>";

    //min and max
    echo (min(0, 150, 30, 20, -8, -200) . "<br>");
    echo (max(0, 150, 30, 20, -8, -200));
    echo "<br>";
    echo "<br>";

    //abs function (return positive values)
    echo (abs(-2.5) . "<br>");
    echo (abs(-2.7) . "<br>");
    echo "<br>";

    //square-root
    echo (sqrt(25) . "<br>");
    echo (sqrt(-81) . "<br>");
    echo (sqrt(27));
    echo "<br>";
    echo "<br>";

    //round figure
    echo (round(25.10) . "<br>");
    echo (round(26.60));
    echo "<br>";
    echo "<br>";

    //Random number with range and without range
    echo (rand(31, 61) . "<br>");
    echo (rand());
    echo "<br>";
    echo "<br>";
    ?>
</body>

</html>