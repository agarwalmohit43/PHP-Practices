<?php
$servername='localhost';
$name='root';
$pass='loverboy43';
$dbname='test';

$conn=new mysqli($servername,$name,$pass,$dbname);

if($conn->connect_error){
   die("Connection Failed: ".$conn->connect_error);
}
echo $ipadd=$_SERVER['REMOTE_ADDR'];



?>