<?php
session_start();
?>

<html>

<body>
    <?php
    session_unset();
    session_destroy();
    echo "Session is destroy"."<br>";
    ?>
</body>

</html>