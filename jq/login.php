<?php
$con=mysqli_connect("localhost","root","loverboy43","loginwithandroid");

if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//$username = $_POST['username'];
//$password = $_POST['password'];

$username = "mohit";
$password = "loverboy43";
$result = mysqli_query($con,"SELECT Role FROM table1 where
Username='$username' and Password='$password'");
$row = mysqli_fetch_array($result);
$data = $row[0];

if($data){
    echo $data;
}
mysqli_close($con);
?>