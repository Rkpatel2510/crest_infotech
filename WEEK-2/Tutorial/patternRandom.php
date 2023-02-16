<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Pattern</title>
</head>

<body>
    <?php
    //P-1
    $n = 7;
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i === 0 || $i === 5) {
                echo "*" . " ";
            } else {
                if ($j === 0 || $j === $n - 1) {
                    echo "*" . " ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    echo "<br>";

    //P-1.2
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($i === 0 || $i === 2) {
                echo "*" . " ";
            } else {
                if ($j === 0 || $j === 6) {
                    echo "*" . " ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    echo "<br>";

    //P-1.3
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 14; $j++) {
            if ($i === 0 || $i === 5) {
                echo "*" . " ";
            } else {
                if ($j === 0 || $j === 13) {
                    echo "*" . " ";
                } else {
                    echo "&nbsp;&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    echo "<br>";

    //P-2
    $s=range(1,9);
    $r=range('a','z');
    for ($i = 1; $i < 5; $i++) {
        for ($j = 5; $j > $i; $j--){
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++){
            if ($i%2==0) {
                echo $r[($i-1)/2] . "&nbsp;&nbsp;";
                
            } else {
                echo $s[$i]/2 . "&nbsp;&nbsp;";
               
            } 
        }
       
        echo "<br>";
    }
    echo "<br>";

    //P-3
    $s=1;
    $r=chr(97);
    for ($i = 1; $i < 5; $i++) {
        for ($j = 5; $j > $i; $j--){
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++){
            if ($i%2==0) {
                echo $r. "&nbsp;&nbsp;";
                $r++;
            } else {
                echo $s . "&nbsp;&nbsp;";
                $s++;               
            } 
        }
       
        echo "<br>";
    }
    echo "<br>";
    
    //P-4
    $r=range('a','z');
    for ($i = 1; $i < 5; $i++) {
        for ($j = 5; $j > $i; $j--){
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++){
            if ($i%2==0) {
                echo $k . "&nbsp;&nbsp;";
               
            } else {
                echo $r[($i-1)/2]. "&nbsp;&nbsp;";
            } 
        }
        
        echo "<br>";
    } 
    echo "<br>";
   
  
    ?>
</body>

</html>