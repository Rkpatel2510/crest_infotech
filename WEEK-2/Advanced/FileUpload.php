<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <?php
   

    if (isset($_POST["submit"])) {
        $img_dir = "F:/";
        $img_file = $img_dir . basename($_FILES["file"]["name"]);
        $done = 1;
        $img_type = strtolower(pathinfo($img_file, PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . "." ."<br>";
            $done = 1;
        } else {
            echo "File is not an image."."<br>";
            $done = 0;
        }
        if (file_exists($img_file)) {
            echo "Sorry, file already exists."."<br>";
            $done = 0;
        }
    
        if ($_FILES["file"]["size"] > 10485760) {
            echo "Sorry, your file is too large."."<br>";
            $done = 0;
        }
    
        if (
            $img_type != "jpg" && $img_type != "png" && $img_type != "jpeg"
            && $img_type != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."."<br>";
            $done = 0;
        }
    
        if ($done == 0) {
            echo "Sorry, your file was not uploaded."."<br>";
          } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $img_file)) {
              echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded."."<br>";
            } else {
              echo "Sorry, there was an error uploading your file."."<br>";
            }
        }
    }

    
    ?>


    <form method="POST" enctype="multipart/form-data">
        <h2> Select image to Upload:</h2>
        <br>
        <input type="file" name="file" id="file">
        <br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>

</html>