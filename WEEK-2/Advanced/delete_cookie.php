<!-- delete cookie-->
<?php
$cookie_name="user";
setcookie($cookie_name,"",time() - 3600*60, "/");
?>
<html>
    <body>
        <?php
        echo "Cookie is deleted";
        ?>
    </body>
</html>