<?php

$servername = "localhost";
$username = "root";
$password = "loverboy43";
$dbname = "test";
//$conn=new mysqli("localhost","root","loverboy43","test");
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

    $query="SELECT * from cities";
    $result=$conn->query($query);
if($result->num_rows>0)
{

   while($row=$result->fetch_assoc())
   {
      $items[]=$row;
   }
    echo json_encode($items);
}


$conn->close();


?>