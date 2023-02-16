<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        //call by value
        function text($str){
            $str=" somthing extra";
        }

        $str="This is";
        text($str);
        echo $str;
        echo "<br>";

        //call by Reference
        function text2(&$str2){
            $str2.=" somthing extra";
        }

        $str2="This is";
        text2($str2);
        echo $str2;
        echo "<br>";

        //call by value and Reference
        function name1($num){
            $num += 5;
        }

        function name2(&$num){
            $num += 5;
        }

        $number=10;
        name1($number);    
        echo "This is a number of $number <br>";

        name2($number);
        echo "This is a number of $number <br>";


    ?>
</body>
</html>