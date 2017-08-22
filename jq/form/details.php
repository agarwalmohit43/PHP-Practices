<?php
if(isset($_POST['name'], $_POST['email'],$_POST['gender'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	echo $name . "<br />" . $email . "<br />" . $gender;
	
	}
	echo "<br>"."Today is " . date("Y-m-d") . "<br>";
?>