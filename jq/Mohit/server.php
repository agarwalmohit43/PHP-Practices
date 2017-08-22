<?php

$current=$_SERVER['REQUEST_TIME'];
$new=$_SERVER['REQUEST_TIME']+86400;

echo $current . "<br/>" . $new. "<br/>". time()."<br/>";
echo $token = sha1(uniqid("hi", true));



?>