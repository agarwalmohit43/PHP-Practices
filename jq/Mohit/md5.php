<?php
if(isset($_POST['name'])) {
    $text = md5($_POST['name']);

    if (!empty($_POST['name'])) {
        $filename='password.txt';
        $handle=fopen($filename,'r');
        $filepassword=fread($handle,filesize($filename));
        if($filepassword==$text){
            echo "password matched";
        }else{
            echo "Wrong password";
        }
    }else{
        echo "Enter Password";
    }
}

?>

<form action="md5.php" method="post">
    <input type="password" name="name"  />
    <input type="submit"/>
</form>