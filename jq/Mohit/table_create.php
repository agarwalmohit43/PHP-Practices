<?php
   $servername = "localhost";
$username = "root";
$password = "loverboy43";
$database="test";

$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="CREATE TABLE abcd(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if($conn->query($sql)==TRUE){
	echo "Table created";
}else{
	echo "Error createing table: ".$conn->error;
}
$conn->close();
?>