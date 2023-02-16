<?php
session_start();
?>

<htmll>
    <body>
        <?php
            $_SESSION["favcar"]="Amaze";
            $_SESSION["favbike"]="Passion";

            echo "My favorite car is " .$_SESSION["favcar"] ."<br>";
            echo "My favorite bike is " .$_SESSION["favbike"];
        ?>
    </body>
</htmll>