<?php
$servername="localhost";
$username="root";
$password="loverboy43";
$dbname="test";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$stmnt=$conn->prepare("insert into abcd(firstname,lastname,email) VALUE (?,?,?)");
$stmnt->bind_param("sss",$firsname,$lastname,$email);

$firsname="Shikhar";$lastname="Agarwal";$email="shikhar@indroydlabs.com";
$stmnt->execute();
$stmnt->close();
$conn->close();


?>