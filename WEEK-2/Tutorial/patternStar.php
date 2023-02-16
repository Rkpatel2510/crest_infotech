<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Star</title>
</head>

<body>


    <?php
    //P-1        
    for ($i = 0; $i < 5; $i++) {
        echo "<br>";
        for ($j = 0; $j < 5; $j++) {
            echo "*";
        }
    }
    echo "<br>";


    //P-2
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";


    //P-3
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j>=4-($i-1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<br>";


    //P-4   
    for ($i = 6; $i > 0; $i--) {
        for ($j = 1; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";


    //P-5
    $v=5;
    for ($i = 1; $i <= $v; $i++) {
        for ($j = 1; $j <= (2*$v)-1; $j++) {
            if ($j>=$v-($i-1) && $j<=$v+($i-1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<br>";


     //P-6
     $r=5;
     for ($i = $r; $i >= 1; $i--) {
         for ($j = 1; $j <= (2*$r)-1; $j++) {
             if ($j>=$r-($i-1) && $j<=$r+($i-1)) {
                 echo "*";
             } else {
                 echo "&nbsp;&nbsp;";
             }
         }
         echo "<br>";
     }
     echo "<br>";


    //P-7
    $k=5;
    for ($i = 1; $i <= $k; $i++) {
        for ($j = 1; $j <= (2*$k)-1; $j++) {
            if ($j>=$k-($i-1) && $j<=$k+($i-1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    $s=4;
    for ($i = $s; $i >= 1; $i--) {  echo "&nbsp;&nbsp;";
        for ($j = 1; $j <= (2*$s)-1; ++$j) {
            if ($j>=$s-($i-1) && $j<=$s+($i-1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<br>";


    //P-8
    $s=5;
    for ($i = $s; $i >= 1; $i--) { 
        for ($j = 1; $j <= (2*$s)-1; ++$j) {
            if ($j>=$s-($i-1) && $j<=$s+($i-1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    $k=5;
    for ($i = 3; $i <= $k; $i++) {
        for ($j = 1; $j <= (2*$k)-1; $j++) {
            if ($j>=$k-($i-1) && $j<=$k+($i-1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }


    //P-9
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }


    //P-10
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j>=4-($i-1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    for ($i=3 ; $i>=0;  $i--) { 
        for ($j=0; $j <=3-$i ; $j++) { 
           echo "&nbsp;&nbsp;";
        }
        for ($k=0; $k <=$i ; $k++) { 
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    ?>

</body>

</html>