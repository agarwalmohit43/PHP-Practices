<?php

$email = "agarwalmohit43@gmail.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
mysqli_connect('localhost','root','loverboy43') or die('unable to connect');
echo '<br/>'. 'mysqli_connected'.'<br>'.'<br>';

$food=array('Healthy'=>array('Vegetables','Fruits'),
                                'Unhealthy'=>array('Pizza','Popcorn'));
   foreach($food as $element=>$inner_element){
	   echo '<strong>'. $element.'</strong><br />';
	   foreach($inner_element as $item){
		   echo $item.'<br>';
		   }
	   }
					

?>