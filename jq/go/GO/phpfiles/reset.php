<?php
include('config.php');

if(isset($_GET['action']))
{
    if($_GET['action']=="reset")
    {
        $encrypt = mysqli_real_escape_string($con,$_GET['encrypt']);
        $id      = mysqli_real_escape_string($con,$_GET['id']);
        $query = "SELECT id FROM userss where link='".$encrypt."'";
        $result = $con->query($query);
        $row = $result->fetch_array();
        if($result->num_rows>=1)
        {
            if(isset($_POST['action']))
            {
                if($_POST['action']==res)
                {


                    $encrypt = mysqli_real_escape_string($con, $_GET['encrypt']);
                    $password = mysqli_real_escape_string($con, $_POST['pass']);
                    $cpassword=mysqli_real_escape_string($con,$_POST['cpass']);
                    if(strlen($password) > 8 && strlen($password) < 15)
                    {
                        if($password==$cpassword)
                        {

                            $query = "SELECT id FROM userss where link='".$encrypt."'";
                            $result = $con->query($query);
                            $row = $result->fetch_array();
                            if ($result->num_rows >= 1)
                            {
                                $query = "update userss set password='" . md5($password) . "',link='0' where id='" . $row['id'] . "'";
                                $con->query($query);

                                echo 'Your password changed sucessfully';
                            } else {
                                echo 'Invalid key please try again.';
                            }
                        }  else{
                            echo "Password and confirm password doesnot matched.";
                        }

                    }else{
                        echo "Password length should be between 8 to 15 characters";
                    }


                }
            }
        }
        else
        {
            echo 'Invalid key please try again.';
        }
    }
}

else
{
    echo "hi" . "<br/>";
    header("location: /login-signup-in-php");
}
?>
<!--<form action="" method="post">
    <p><input id="password" name="pass" type="password" placeholder="Password"></p>
    <p><input id="password" name="cpass" type="password" placeholder="Confirm Password">
        <input name="action" type="hidden" value="res" /></p>
    <p><input type="submit" value="Reset" /></p>
</form>
-->
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body>

<div class="panel panel-primary">
    <div class="panel-heading"><center>Reset Password</center></div>
    <div class="panel-body">
        <div class="well well-sm">
            <form action="" method="post">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-edit"></span></span>
                    <input id="password" name="pass" type="password" placeholder="Password" class="form-control"  aria-describedby="sizing-addon1">
                </div><br/>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-edit"></span></span>
                    <input id="password" name="cpass" type="password" placeholder="Confirm Password" class="form-control"  aria-describedby="sizing-addon1">
                </div><br/><br/>
                <input name="action" type="hidden" value="res" /></p>

                <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </form>
        </div>
    </div>
</div>
</body>
</html>

