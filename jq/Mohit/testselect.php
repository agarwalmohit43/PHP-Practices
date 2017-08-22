<?php
$conn=new mysqli("localhost","root","loverboy43","test");
if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

$query="SELECT * FROM abcd WHERE firstname=? and lastname=?";


$stmnt=$conn->stmt_init();
if(!$stmnt->prepare($query)){
    echo "failed to create query";
}else{
   $firstname="Mohit";
    $lastname="Agarwal";
    $stmnt->bind_param("ss",$firstname,$lastname);
    $stmnt->execute();
    $result=$stmnt->get_result();

    print_r($result);
    echo "<br/>";
    echo "<br/>";

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            print_r($row);echo "<br>";
            $value[]=$row;
            print_r($value);
          /* foreach($row as $r){

               echo  $r."<br>";
           }*/

        }
    }
}
$stmnt->close();
$conn->close();
?>