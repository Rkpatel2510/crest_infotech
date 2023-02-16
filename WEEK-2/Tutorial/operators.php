<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>

<?php
//8 types of operators

// Arithmetic operators(+, -, *, /, %, **)
    $x=9;
    $y=3;

    echo $x**$y ."<br>";
    echo $x*$y ."<br>";
    echo $x/$y ."<br>";
    echo $x-$y ."<br>";
    echo $x+$y ."<br>";
    echo $x%$y ."<br>";
    echo "<br>";
    


// Assignment operators(=, +=, -=, *=, /=, %=)
    $x=7;
    $x*=3;
    echo $x ."<br>";

    $y=7;
    $y%=3;
    echo $y ."<br>";

    $a=7;
    $a+=3;
    echo $a ."<br>";

    $b=7;
    $b-=3;
    echo $b ."<br>";

    $c=7;
    $c/=3;
    echo $c ."<br>";

    $d=7;
    echo $d ."<br>";
    echo "<br>";

    
// Comparison operators(==, ===, !=, <>, !==, <, >, <=, >=, <=>)
    $x=15;
    $y=30;

    var_dump ($x==$y);
    echo "<br>";
    var_dump ($x===$y);
    echo "<br>";
    var_dump ($x!=$y);
    echo "<br>";
    var_dump ($x<>$y);
    echo "<br>";
    var_dump ($x!==$y);
    echo "<br>";
    var_dump ($x<$y);
    echo "<br>";
    var_dump ($x>$y);
    echo "<br>";
    var_dump ($x<=$y);
    echo "<br>";
    var_dump ($x>=$y);
    echo "<br>";
    var_dump ($x<=>$y);//this operator will br return -1 then condition lessthen, 0 then condition equal, 1 then condition gretarthen,
    echo "<br>";
    echo "<br>";
    

// Increment/Decrement operators(x++, ++x, x--, --x)
    $r=25;
    echo $r++ ."<br>";//first return then increment

    $r=25;
    echo ++$r ."<br>";//first increment then return

    $r=25;
    echo $r-- ."<br>";//first return then decrement


    $r=25;
    echo --$r ."<br>";//first decfrement then return
    echo "<br>";
    
    
// Logical operators(AND-&&, OR-||, XOR-^, !)
    $a="ram";
    $b="laxman";

//AND
    if ($a=="ram" && $b=="laxman"){
        echo "Jai Shree Ram";
    }else {
        echo "Wrong!";
    }
    echo "<br>";

//OR
    if ($a=="ram" || $b=="Bharat"){
        echo "Jai Shree Ram";
    }else {
        echo "Wrong!";
    }
    echo "<br>";

//XOR
    if ($a=="ram" ^ $b=="laxman"){
        echo "Jai Shree Ram";
    }else {
        echo "Wrong!";
    }
    echo "<br>";

    if ($a=="ram" ^ $b=="Bharat"){
        echo "Jai Shree Ram";
    }else {
        echo "Wrong!";
    }
    echo "<br>";
    echo "<br>";


// String operators(., .=)
    $me="My name is";
    $me2=" Raxit";

    echo $me . $me2;
    echo "<br>";
    
    $me.=$me2;
    echo $me;//append on second veriable
    echo "<br>";
    $me.=$me2;
    echo $me2;//append on second veriable
    echo "<br>";
    echo "<br>";
    
// Array operators(==, ===, !=, <>, !==,)
    $p=array("a"=>"raxit", "b"=>"dhruvil");
    $s=array("c"=>"kavy", "d"=>"harsh");

    var_dump ($p==$s);
    echo "<br>";
    var_dump ($p===$s);
    echo "<br>";
    var_dump ($p!=$s);
    echo "<br>";
    var_dump ($p<>$s);
    echo "<br>";
    var_dump ($p!==$s);
    echo "<br>";
    echo "<br>";

// Conditional assignment operators(?:, ??)
    $teacher=""; //it's a empty
    echo $student= $teacher ? "student" : "sir";
    echo "<br>";

    $teacher="hitesh";
    echo $student= $teacher ? "sir" : "student";


?>

</body>
</html>