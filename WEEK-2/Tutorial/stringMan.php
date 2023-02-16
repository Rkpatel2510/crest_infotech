<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String manipulation</title>
</head>
<body>
    <?php
        // String manipulation

        // strlen( ) : This is used to find the length of the string
        echo strlen("My name is Raxit");
        echo "<br>";
        
        // str_word_count( ) : To find the number of words in a string 
        echo str_word_count("My name is Raxit");
        echo "<br>";

        // str_rev( ) : To reverse a string
        echo strrev("My name is Raxit");
        echo "<br>";

        // strpos( ) : To search for a specific string
        echo strpos("My name is Raxit","Raxit");
        echo "<br>";

        // str_replace( ) : Replace text with in a string
        echo str_replace("Raxit", "Dhruvil", "My name is Raxit");
        echo "<br>";
    ?>
</body>
</html>