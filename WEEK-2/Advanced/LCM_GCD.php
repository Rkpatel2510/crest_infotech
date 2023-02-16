<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCM & GCD</title>
</head>
<body>
    <?php
   $a=25;
   $b=15;

   for ($i=1; $i <= $a ; $i++) { 
        if ($a%$i==0 && $b%$i==0) {
            $gcd=$i;
        }
   }
   echo "Two num of GCD is " .$gcd ."<br>";

   $lcm = ($a*$b)/$gcd;
   echo "Two num of LCM is " .$lcm;


    ?>
</body>
</html> 