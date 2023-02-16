<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File variable</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        exit();
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <h2> Select File to Upload:</h2>
        <br>
        <input type="file" name="file" id="file">
        <br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>

</body>

</html>