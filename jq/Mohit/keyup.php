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

if(isset($_POST['city']))
{

    $query="SELECT * from cities where city LIKE ?";


    $stmnt=$conn->stmt_init();
   if(!$stmnt->prepare($query))
   {
       echo "Failed To create query";
   }else
   {

       $city="{$_POST['city']}%";
       $stmnt->bind_param("s",$city);

       $stmnt->execute();
       $result=$stmnt->get_result();
       if($result->num_rows>0)
       {
           while($row=$result->fetch_assoc())
           {
               /* foreach($row as $c)
                {
                    echo $c."<br>";
                }*/
               //print_r($row['city'].",");
               $items[]=$row;

           }
           echo json_encode($items);

       }
   }

    $stmnt->close();
}
$conn->close();


?>