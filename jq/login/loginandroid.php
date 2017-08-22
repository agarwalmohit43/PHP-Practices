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


$uname = $_POST['uname'];
$pass = $_POST['pass'];

$query_search = "select * from username where uname = '".$uname."' AND pass = '".$pass. "'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);

if($rows --> 0) { echo "Y"; }
else  {echo "N"; }
?>