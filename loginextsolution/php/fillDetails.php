<?php
include('config.php');

if(isset($_POST['action']))
{
    if ($_POST['action'] == "details")
    {
        $fName=$_POST['fname'];
        $lName=$_POST['lname'];
        $no = mysqli_real_escape_string($con, $_POST['contact']);
        $country=$_POST['country'];
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject=$_POST['subject'];
        $message=$_POST['message'];


            $query = "insert into details(FirstName,LastName,ContactNumber,Country,Email,Subject,Message) values('".$fName."','".$lName."','".$no."','".$country."','".$email."','".$subject."','".$subject."')";
            $con->query($query);
            echo "e2";

    }

}


?>