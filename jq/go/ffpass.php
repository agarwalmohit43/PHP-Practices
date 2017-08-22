<?php
include('config.php');

if($_POST['action']=="forgetpass")
{
    $email= mysqli_real_escape_string($con,$_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        echo "Invalid email address please type a valid email!!";
    }
    else
    {
        $query = "SELECT id FROM users where email='".$email."'";
        $result = $con->query($query);
        $row=$result->fetch_array();

        if($result->num_rows >=1)
        {
            $encrypt = md5(1290*3+$row['id']);
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'info@phpgang.com';
            $body='Hi, <br/> <br/>Your Membership ID is '.$row['id'].' <br><br>Click here to reset your password <a href="http://localhost/jq/go/reset.php?encrypt='.$encrypt.'&action=reset&id='.$row['id'].'">Link</a>   <br/> <br/>--<br>Mohit Agarwal<br>Solve your problems.';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to,$subject,$body,$headers);
            echo  'Hi, <br/> <br/>Your Membership ID is '.$row['id'].' <br><br>Click here to reset your password   <br/> <br/>--<br>Mohit Agarwal<br>Solve your problems.';
            echo "<br/>". $row['id']."<br/>".$rs."<br/>";
            echo $body;
        }
        else
        {
            echo "Account not found please signup now!!";
        }
    }
}


?>
<div>
<form action="" method="post">
    <p><input id="email" name="email" type="email" placeholder="Email"></p>

      <p>  <input name="action" type="hidden" value="forgetpass" /></p>
    <p><input type="submit" value="Forget Password" /></p>
</form>
</div>