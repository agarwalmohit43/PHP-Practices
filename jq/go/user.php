<?php
include('config.php');

if(isset($_POST['action']))
{
    if ($_POST['action'] == "login")
    {
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $query="select name from users where email='" . $email . "' and password='" . md5($password) . "'";
        $result=$con->query($query);
        $row=$result->fetch_array();
        if ($result->num_rows >=1)
        {
            echo $row['name'] . " Login Sucessfully!!";
        } else
        {
            echo "Invalid email or password!! or kindly singup!!";
        }
    }
    elseif($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($con,$_POST['name']);
        $email      = mysqli_real_escape_string($con,$_POST['email']);
        $password   = mysqli_real_escape_string($con,$_POST['password']);
        $cpassword   = mysqli_real_escape_string($con,$_POST['cpassword']);
        if($cpassword == $password)
        {
            $query = "SELECT email FROM users where email='".$email."'";
            $result = $con->query($query);
            $row =$result->num_rows;
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
            {
                echo "Invalid email address please type a valid email!!";
            }
            elseif($row>=1)
            {
                echo $email." Email already exist!!";
            }
            else
            {
                $query="insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')";
                $con->query($query);
                echo"Signup Sucessfully!!";
            }
        }
        else
        {
            echo "Confirm Password and Password didnot matched!!";
        }
    }
}


?>
<!-- Login and Signup forms -->
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Login</a></li>
        <li><a href="#tabs-2" class="active">Signup</a></li>
        <li><a href="ffpass.php" class="active">Forget Password</a></li>


    </ul>
    <div id="tabs-1">
        <form action="" method="post">
            <p><input id="email" name="email" type="text" placeholder="Email"></p>
            <p><input id="password" name="password" type="password" placeholder="Password">
                <input name="action" type="hidden" value="login" /></p>
            <p><input type="submit" value="Login" /></p>
        </form>
    </div>
    <div id="tabs-2">
        <form action="" method="post">
            <p><input id="name" name="name" type="text" placeholder="Name"></p>
            <p><input id="email" name="email" type="text" placeholder="Email"></p>
            <p><input id="password" name="password" type="password" placeholder="Password">
            <p><input id="password" name="cpassword" type="password" placeholder="confirm Password">

                <input name="action" type="hidden" value="signup" /></p>
            <p><input type="submit" value="Signup" /></p>
        </form>
    </div>
</div>
