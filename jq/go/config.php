<?php

$servername = "localhost";
$username = "root";
$password = "loverboy43";
$dbname = "gobus";
$con=new  mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
    die("Connection Failed:".$con->connect_error);
}


?>