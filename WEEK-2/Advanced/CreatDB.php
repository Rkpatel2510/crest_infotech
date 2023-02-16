<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "";

$conn = mysqli_connect($servername, $username, $password);

if ($conn) {
    echo "Connaction Successfull"."<br>";
} else {
    die("Connaction Fail" . mysqli_connect_error());
}

$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully"."<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

