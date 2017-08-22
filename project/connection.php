<?php
$host="localhost";
$uname="root";
$pass="loverboy43";
$database = "try";
$connection=mysqli_connect($host,$uname,$pass)
or die("Database onnection Failed");
$selectdb=mysqli_select_db($database) or die("Database could not be selected");
$result=mysqli_select_db($database)
or die("database cannot be selected <br>");
?>