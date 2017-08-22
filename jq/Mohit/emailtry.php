<?php
$to='agarwalmohit43@gmail.com';
$subject='Login';
$body='Somenone Logged in';
$headers='From: agarwalmohit43@live.com';
if(mail($to,$subject,$body,$headers)){
    echo "email sent!..";
}

?>