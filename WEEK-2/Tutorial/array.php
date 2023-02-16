<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

     //indexed array
     //$cars=array( [0] => Amaze [1] => BMW [2] => Verna [3] => Audi ); it's a indexed array
     $cars=array("Amaze", "BMW", "Verna", "Audi");
     $arrlength =count($cars);

      for ($x=0; $x <$arrlength ; $x++) { 
         echo $cars[$x];
         echo "<br>";
      }
      echo "<br>";
      print_r($cars);
       
      echo "<br>";
      echo "<br>";

     //associative array

      $age = array("Raj" =>10,"Vinay" =>12, "Ridham" =>13, );

      echo "Raj is " .$age['Raj'] . " years old.<br>";
      echo "Vinay is " .$age['Vinay'] . " years old.<br>";
      echo "Ridham is " .$age['Ridham'] . " years old.<br>";
      echo "<br>";
      print_r($age);
      echo "<br>";
      echo "<br>";
     
     //Multidaimantional array

      $student = array(
        array(25, "Raxit", 19),
        array(27, "Vidhi", 19)
      );

      echo $student[0][0]. " is roll number, " .$student[0][1]. " is name, " .$student[0][2]. " is age." ."<br>";
      echo $student[1][0]. " is roll number, " .$student[1][1]. " is name, " .$student[1][2]. " is age." ."<br>";
      echo "<br>";
      print_r($student);
      echo "<br>";
      echo "<br>";

      
    
    ?>
</body>
</html>