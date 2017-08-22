<?php
$host="localhost";
$uname="root";
$pass="loverboy43";
$dbname="safs";

$con=mysqli_connect($host,$uname,$pass,$dbname);
if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

/*$query="SELECT question FROM question where qtype in ('Long') and qlevel='Hard' and cat_id in (1,2,3,4) and ch_id in(1,2,3,4,5);";
$result=mysqli_query($con,$query);

echo "<br/>";

/*while($row=$result->fetch_assoc()){

        
    //echo "Question Id: ".$row['qid']."  Question Type: ".$row['qtype']."<br/>";
   echo $row['question']."<br/>";
}*//*
foreach ($result as $row){
    foreach ($row as $item){
        echo $item;
        echo "<br/>";
    }
}*/
$sql2 ="select subject from subject  where sub_id=7";
$result2=$con->query($sql2);
echo $result2->fetch_assoc()['subject'];
echo "<br/>".date("Y-m-d-h:i:s");

?>