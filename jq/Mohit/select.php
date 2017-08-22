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
$sql="SELECT id,firstname,lastname,email FROM abcd";
$result=$conn->query($sql);

if($result->num_rows>0){
	while ($row=$result->fetch_assoc()) {
		//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " Email:" . $row["email"] .' <br/>';
//var_dump($row);
	print_r($row);

			}
	
}else{
	
	echo "0 result";
}


$conn->close();
?>