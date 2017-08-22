<?php
/*
$fname=$lname = $email = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname= test_input($_POST['fname']);
$lname= test_input($_POST['lname']);
$email=test_input($_POST['email']);
$gender=test_input($_POST['gender']);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}*/
$servername = "localhost";
$username = "root";
$password = "loverboy43";
$dbname = "bppimt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['gender'])){
//using bind-param
$stmn=$conn->prepare("INSERT INTO student (fname,lname,email,gender) VALUES (?,?,?,?)");
$stmn->bind_param("ssss",$fname,$lname,$email,$gender);

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$stmn->execute();
echo "Saved Successfully";
$stmn->close();}else{
	echo "Unable To Save Data";
}

$conn->close();
?>