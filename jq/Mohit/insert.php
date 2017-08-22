<?php
$servername = "localhost";
$username = "root";
$password = "loverboy43";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*
$sql = "INSERT INTO abcd (firstname, lastname, email)
VALUES ('Abhi', 'Agarwal', 'abhishek1.dhn@gmail.com'),('Abhihek', 'Agrwal', 'abhishek1.dhn@gmail.com');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

//using bind-param
$stmn=$conn->prepare("INSERT INTO abcd (firstname, lastname, email) VALUES (?,?,?)");
$stmn->bind_param("sss",$firstname,$lastname,$email);

$firstname= "Shailav";
$lastname= "Agarwal";
$email="shailavagarwal@gmail.com";
$stmn->execute();

$stmn->close();
$conn->close();
?>