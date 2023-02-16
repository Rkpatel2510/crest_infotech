<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
    echo "Connaction Successfull" . "<br>";
} else {
    die("Connaction Fail" . mysqli_connect_error());
}

//Creat Table
$sql = "CREATE TABLE student(
    std_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    std_fname VARCHAR(30) NOT NULL,
    std_lname VARCHAR(30) NOT NULL,
    std_email VARCHAR(50),
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully" . "<br>";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}

//Insert query
$sql = "INSERT INTO student (std_fname, std_lname, std_email) VALUES (Raxit, Kotadiya, raxit@123gmail.com);";
$sql = "INSERT INTO student (std_fname, std_lname, std_email) VALUES (Vivek, Kotadiya, vivek@213gmail.com);";
$sql = "INSERT INTO student (std_fname, std_lname, std_email) VALUES (Dhruvil, Hirapara, dhruvil210@gmail.com);";
$sql = "INSERT INTO student (std_fname, std_lname, std_email) VALUES (Savan, Rathod, savan585@gmail.com);";

//Select query

mysqli_close($conn);
?>