<?php
$servername="localhost";
$username="root";
$password="loverboy43";

//create connection
 $conn=new mysqli('localhost','root','loverboy43');
if($conn->connect_error){
die("Connection Failed: ". $conn->connect_error);
}
echo 'Connected';
//create database
$sql="CREATE DATABASE abcd";
if($conn->query($sql)==TRUE){
	echo '<br>'."DATABASE CREATED SUCCESSFULLY";
}else{
	
	echo '<br>'.'Unable To create database';
	
}


$conn->close();

?>