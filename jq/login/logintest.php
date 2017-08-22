<?php
$servername = "localhost";
$username = "root";
$password = "loverboy43";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * from username";
$result=$conn->query($sql);

if($result->num_rows>0){
		$value=array();
	while ($row=$result->fetch_assoc()) {
		//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " Email:" . $row["email"] .' <br/>';
//var_dump($row);
	//print_r($row);
//	print(json_encode($row));
	$value[]=$row;
	
			}
	echo json_encode($value);
	
}else{
	
	echo "0 result";
}


$conn->close();
?>