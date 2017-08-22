<?php
include('config.php');

if(isset($_POST['action']))
{
    if ($_POST['action'] == "signin")
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $query = "select email from userss where email='".$email."' and password='" . md5($password) . "'";
        $result = $con->query($query);
        $row = $result->fetch_array();
        if ($result->num_rows >= 1)
        {
            $querynew = "select id,active from userss where email='" . $email . "'";
            $resultnew = $con->query($querynew);
            $rownew=$resultnew->fetch_assoc();
            if ($result->num_rows >=1)
            {

                    $x= $rownew['active'];
                    $y=1;
                    if($x==$y)
                    {
                       echo $email;
                    }
                else{
                    $queryactivate = "select id from userss where email='" . $email . "'";
                    $resultactivate = $con->query($queryactivate);
                    $rowactivate=$resultactivate->fetch_assoc();
                    if ($resultactivate->num_rows >=1)
                    {

                        $encrypt=md5(rand()+$rowactivate['id']);
                        $querylink="update userss set link='" . $encrypt . "' where id='" . $rowactivate['id']. "'";
                        $con->query($querylink);
                        $message = "Your Account Activation  link at gobusnepal.com";
                        $to = $email;
                        $subject = "Activate Account care@gobusnepal.com";
                        $from = 'care@gobusnepal.com';
                        $body = 'Hi, <br/> <br/>Your Membership ID is ' . $rowactivate['id'] . ' <br><br>Click here to activate your account <a href="http://m.gobusnepal.com/phpfiles/activate.php?encrypt=' . $encrypt . '&action=activate&id=' . $rowactivate['id'] . '">Link</a>   <br/> <br/>--<br>Gobus<br>Solve your problems.';
                        $headers = "From: " . strip_tags($from) . "\r\n";
                        $headers .= "Reply-To: " . strip_tags($from) . "\r\n";
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        mail($to, $subject, $body, $headers);
                    }
                }

            }
        } else {
            /*echo "Invalid email or password!! or kindly singup!!";*/
            echo "e1";
        }


    }
}
?>