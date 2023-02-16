<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Alphabet</title>
</head>

<body>
    <?php
    //P-1
    $a = range('A', 'Z');
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $a[$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";

    //P-2    
    $a = range('A', 'Z');
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $a[$i] . " ";
        }
        echo "<br>";
    }
    echo "<br>";

    //P-3
    $k = 0;
    $a = range('A', 'Z');
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $a[$k] . " ";
            $k++;
        }
        echo "<br>";
    }
    echo "<br>";

    //P-4
    $a = range('A', 'Z');
    for ($i = 4; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            echo $a[$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";

    //P-5
    $a = range('A', 'Z');
    for ($i = 0; $i < 5; $i++) {
        for ($j = 4; $j >= $i; $j--) {
            echo $a[$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";

    //P-6
    $a = range('A', 'Z');
    for ($i = 4; $i >= 0; $i--) {
        for ($j = $i; $j >= 0; $j--) {
            echo $a[$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";

    //P-7
    $a = range('A', 'Z');
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 4 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < (2 * $i) - 1; $k++) {
            echo $a[$k];
        }
        echo "<br>";
    }
    echo "<br>";

    //P-8
    $a = range('A', 'Z');
    $s=0;
    for ($i = 0; $i <= 5; $i++) {
        for ($j = 0; $j <= 4 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < (2 * $i) - 1; $k++) {
            echo $a[$s];
            $s++;
        }
        echo "<br>";
    }
    echo "<br>";
    ?>
</body>

</html>