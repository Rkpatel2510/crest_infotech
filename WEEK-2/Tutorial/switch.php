<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break an Continue</title>
</head>

<body>
    <?php
    //Break
    $favfood = "Pizza";

    switch ($favfood) {
        case "Burger":
            echo "Your favorite food is Burger!";
            break;
        case "Aloo patty":
            echo "Your favorite food is Aloo patty!";
            break;
        case "Pizza":
            echo "Your favorite food is Pizza";
            break;
        default:
            echo "Your favorite food is not available ";
    }
    echo "<br>";
    echo "<br>";

    //Continue


    for ($i = 1; $i < 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo $i . " ";
        echo "<br>";
    }
    ?>


</body>

</html>