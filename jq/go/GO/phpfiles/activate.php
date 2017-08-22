<?php
include('config.php');

if(isset($_GET['action']))
{
    if($_GET['action']=="activate")
    {
        $encrypt = mysqli_real_escape_string($con,$_GET['encrypt']);
        $id      = mysqli_real_escape_string($con,$_GET['id']);
        $query = "SELECT id FROM userss where link='".$encrypt."'";
        $result = $con->query($query);
        $row = $result->fetch_array();
        if($result->num_rows>=1)
        {
            if(isset($_GET['action']))
            {
                if($_GET['action']=="activate")
                {


                    $encrypt = mysqli_real_escape_string($con, $_GET['encrypt']);
                    $query = "SELECT id FROM userss where link='".$encrypt."'";
                    $result = $con->query($query);
                    $row = $result->fetch_array();
                    if ($result->num_rows >= 1)
                    {
                        $query = "update userss set active=1,link='0' where id='".$row['id']."'";
                        $con->query($query);

                        echo 'Your account activated <a href="user.php">click here to login</a>.';
                    } else
                    {
                        echo 'Invalid key please try again. <a href="ffpass.php">Forget Password?</a>';
                    }
                }
            }
        }
        else
        {
            echo 'Invalid key please try again. <a href="ffpass.php">Forget Password?</a>';
        }
    }
}

else
{
    echo "hi" . "<br/>";
    header("location: /login-signup-in-php");
}

?>