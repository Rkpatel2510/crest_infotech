<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <?php
    
    
    if (isset($_POST['submit'])) { 
        echo checkprime($_POST['number']);
    }

        function checkprime($n){
            $f=0;
            
        for ($i=2; $i<=$n-1 ; $i++) {  
            if ($n % $i==0) {
                $f=1; 
                break;
            }
        }
        if ($f==1) {
           return "Not a prime number";
        } else {
            return "It's a prime number";
        }
    }
    ?>
    
      <form method="post" action="primeNum.php">
            <input type="text" name="number">
            <br><br>
            <input type="submit" name="submit">
      </form>
</body>
</html>