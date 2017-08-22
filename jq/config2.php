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

if(isset($_POST['uname'],$_POST['pass'])){
    $query="SELECT * FROM username where uname=? and pass=?";

    $stmt=$conn->stmt_init();
    if(!$stmt->prepare($query))
    {
        print "Failed to prepare statement\n";
    }
    else
    {
        $stmt->bind_param("ss", $uname,$pass);
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows>0){
            while ($row = $result->fetch_array())
            {
                //print_r($row);
                /*foreach ($row as $r)
                {
                    print_r($r);
                }
                print "\n";*/
                // echo "Successfully logged in: ".strtoupper($row['uname']);
                $data[]=$row;
                echo json_encode($data);
            }}else{
            echo "Incorrect Username and Password";
        }
        $stmt->close();
    }
}

$conn->close();

?>