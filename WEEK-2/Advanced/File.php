<html>

<body>

    <?php
    //Read File Function
    echo readfile("List.txt");
    echo "<br>";

    //File Open-Read-Close
    $myfile = fopen("List.txt", "r") or die("Unable to open file!");
    echo "<br>";
    echo fread($myfile, filesize("List.txt"));
    fclose($myfile);
    echo "<br>";
    echo "<br>";

    //Read single line
    $myfile = fopen("List.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    echo "<br>";
    echo fgets($myfile);
    fclose($myfile);
    echo "<br>";
    echo "<br>";

    //End of File
    $myfile = fopen("List.txt", "r") or die("Unable to open file!");
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    echo "<br>";
    echo "<br>";

    //Read Sigle Char.
    $myfile = fopen("1.txt", "r") or die("Unable to open file!");
    while (!feof($myfile)) {
        echo fgetc($myfile) . "<br>";
    }
    fclose($myfile);
    echo "<br>";
    echo "<br>";

    //File Creat/Write
    $myfile = fopen("test.txt", "w") or die("Unable to open file!");
    $txt = "Jethalal \n";
    fwrite($myfile, $txt);
    $txt = "Daya \n";
    fwrite($myfile, $txt);
    fclose($myfile);

    $file = fopen("test.txt", "a") or die("Unable to open file!");
    $txt = "Champaklal \n";
    fwrite($file, $txt);
    $txt = "Tapu \n";
    fwrite($file, $txt);
    fclose($file);
    ?>

</body>

</html>