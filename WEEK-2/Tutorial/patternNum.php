<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Number</title>
</head>

<body>

    <?php
    //P-1
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    echo "<br>";

    //P-2
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo "<br>";
    }
    echo "<br>";

    //P-3
    $s = 1;
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j < 4 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= ((2 * $i) - 1); $k++) {
            echo $s;
            $s++;
        }
        echo "<br>";
    }
    echo "<br>";

    //P-4
    for ($i = 1; $i <= 5; $i++) {
        for ($j = $i; $j >= 1; $j--) {
       
           echo $j%2;
        }
        echo "<br>";
    }
    echo "<br>";



    //P-5
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 0; $j < 5 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < $i; $k++) {
            echo $k;
        }
        echo "<br>";
    }
    echo "<br>";
    ?>



</body>

</html>