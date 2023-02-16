<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        echo palindrome($_POST['number']);
    }
    function palindrome($number)
    {
        $t = $number;
        $new = 0;
        while (floor($t)) {
            $d = $t % 10;
            $new = $new * 10 + $d;
            $t = $t / 10;
        }
        if ($new == $number) {
            return "It's a palindrome";
        } else {
            return "It's a not palindrome";
        }
    }


    ?>

    <form method="post" action="palindrome.php">
        <input type="text" name="number">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>