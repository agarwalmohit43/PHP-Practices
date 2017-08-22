<?php
session_start();
include ('config.php');
if(isset($_POST['action']))
{
    if ($_POST['action'] == "login")
    {
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        $query = "select id,username from admin where username='".$uname."' and password='" . $pass . "'";
        $result = $con->query($query);
        $row=$result->fetch_array();
        if($result->num_rows>=1){

            $_SESSION['userid'] = $row['id'];
            $_SESSION['uname']=$row['username'];
            echo "e1";
        }else{
            echo "e2";
        }

    }


}
?>