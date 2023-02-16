<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Function</title>
</head>
<body>
    <?php
    //count
        $array=array("blue", "red", "green", "yellow");
        echo count($array)."<br>";

    //in_array
        $cars=array("Amaze", "Varna", "Randrover");  
        if (in_array("Amaze", $cars)){
            echo "Match Found";
        } else {
            echo "Match not Found";
        }
        echo "<br>";

    //substr
        echo substr("Raxit Kotadiya",7)."<br>";
        echo substr("Raxit Kotadiya",-5); 
        echo "<br>";
        
    //is_array  
        $a="Hello! Dear";
        echo "a is" .is_array($a) ."<br>";

        $b=array("color", "cars", "Mobile");
        echo "b is " .is_array($b) ."<br>";

    //str_replace
        $r= "Excuse me Mr.";
        echo str_replace("Mr.", "Miss.",$r);   
        echo "<br>";
        
    //strtolower
        $me="I LOve CodeiNg";
        echo strtolower($me)."<br>";    
    
    //strtoupper
        $me="I LOve CodeiNg";
        echo strtoupper($me)."<br>";
        
    //strlen
        echo strlen("My name is Raxit");
        echo "<br>";

    //implode
        $std = array("mango", 25, "banana" ,27);
        echo implode("*",$std);
        echo "<br>";   

    //array_merge
        $a=array("p"=>"Power", "o"=>"Of");
        $b=array("s"=>"Sardar", "v"=>"vanshi");
        print_r(array_merge($a,$b));
        echo "<br>";

    //strpos
        echo strpos("My name is Raxit","Raxit");
        echo "<br>";
        
    //strtotime
        $d=strtotime("20:30 June 27 2003");
        echo date("d/m/Y h:i:sa" ,$d)."<br>";
        echo "<br>";    
    ?>
</body>
</html>