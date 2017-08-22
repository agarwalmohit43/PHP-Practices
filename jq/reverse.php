<?php
if(isset($_GET['input'])){
	$string=$_GET['input'];
	echo strrev($string);
	
	}
if(isset($_POST['name'], $_POST['string'])){
	$name=$_POST['name'];
	$string=$_POST['string'];
	echo '<strong>', $name, '</strong> is <i>' , $string,'</i>' ;
	
	}
	?>