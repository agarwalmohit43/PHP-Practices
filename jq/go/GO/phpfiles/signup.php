<?php
include('config.php');

if(isset($_POST['action']))
{

    if ($_POST['action'] == "signup")
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
       $no = mysqli_real_escape_string($con, $_POST['contact']);

        $password = mysqli_real_escape_string($con, $_POST['password']);
        $query = "SELECT email FROM userss where email='" . $email . "'";
        $result = $con->query($query);
        $row = $result->num_rows;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            /*echo "Invalid email address please type a valid email!!";*/
            echo "e1";
        } elseif ($row >= 1) {
            /*echo $email . " Email already exist!!";*/
            echo "e2";
        } else {
            $query = "insert into userss(email,password,contact) values('" . $email . "','" . md5($password) . "','" . $no . "')";
            $con->query($query);
            $querynew = "SELECT id FROM userss where email='" . $email . "'";
            $result = $con->query($querynew);
            $rownew = $result->fetch_array();
            $id = $rownew['id'];
            $encrypt=md5(rand()+$rownew['id']);
            $querylink="update userss set link='" . $encrypt . "' where id='" . $rownew['id']. "'";
            $con->query($querylink);

           /* $encrypt = md5(1290 * 3 + $rownew['id']);*/
            $message = "Your Account Activation  link at gobusnepal.com";
            $to=$email;
            $subject="Activate Account care@gobusnepal.com";
            $from = 'care@gobusnepal.com';
            $body='Hi, <br/> <br/>Your Membership ID is '.$rownew['id'].' <br><br>Click here to activate your account <a href="http://m.gobusnepal.com/phpfiles/activate.php?encrypt=' . $encrypt . '&action=activate&id=' . $rownew['id'] . '">Link</a>   <br/> <br/>--<br>Gobus<br>Solve your problems.';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to,$subject,$body,$headers);

            /*echo 'http://localhost/jq/go/GO/phpfiles/activate.php?encrypt=' . $encrypt . '&action=activate&id=' . $rownew['id'] . '';*/
            echo $email;


        }


    }


}

?>