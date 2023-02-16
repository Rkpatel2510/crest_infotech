<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php
        //4 types in loop

        // while loop
            $a=10;
            while ($a >= 1) {
                echo $a ."<br>";
                $a--;
            } echo "<br>";


        // do while loop
        $a=1;
            do{
                echo $a ."<br>";
                $a++;
            }  while ($a <= 10);
            echo "<br>";
            
         

        // for loop
    
        for ($x=0; $x <=5 ; $x++) { 
            echo "this is a num. of :" .$x ."<br>";
        }
        echo "<br>";
        
        
        // foreach loop
        $cars=array("Audi"=>"blue", "Farari"=>"red", "Lamborgini"=>"yellow");

        foreach ($cars as $v => $value) {
            echo "$v=$value .<br>";
        }
 ?>
</body>
</html>