<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <HTML>
    <HEAD>
    </HEAD
        <BODY>
                <form action="shilpa.php" method="post">
                    name:<input type="text" name="name">
                <input type="submit" value="submit">
                </form>
        </BODY>
    </HTML>

<?php
        if(isset($_POST['name']))
        {
            $name=$_POST['name'];
            echo $name ;

        }
?>