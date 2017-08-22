<?php
include('config.php');

if(isset($_GET['action']))
{
    if($_GET['action']=="reset")
    {
        $encrypt = mysqli_real_escape_string($con,$_GET['encrypt']);
        $id      = mysqli_real_escape_string($con,$_GET['id']);

        echo $id."<br/>";
        $query = "SELECT id FROM users where md5(1290*3+".$id.")='".$encrypt."'";
        $result = $con->query($query);
        $row = $result->fetch_array();
        if($result->num_rows>=1)
        {
            if(isset($_POST['action']))
            {
                if($_POST['action']==res)
                {
                    echo "entered"."<br/>";

                    $encrypt = mysqli_real_escape_string($con, $_GET['encrypt']);
                    $password = mysqli_real_escape_string($con, $_POST['pass']);
                    $id      = mysqli_real_escape_string($con,$_GET['id']);
                    $query = "SELECT id FROM users where md5(1290*3+".$id.")='".$encrypt."'";
                    $result = $con->query($query);
                    $row = $result->fetch_array();
                    if ($result->num_rows >= 1)
                    {
                        $query = "update users set password='" . md5($password) . "' where id='" . $id . "'";
                        $con->query($query);

                        echo 'Your password changed sucessfully <a href="user.php">click here to login</a>.';
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
<form action="" method="post">
    <p><input id="password" name="pass" type="password" placeholder="Password"></p>
    <p><input id="password" name="cpass" type="password" placeholder="Confirm Password">
        <input name="action" type="hidden" value="res" /></p>
    <p><input type="submit" value="Login" /></p>
</form>
