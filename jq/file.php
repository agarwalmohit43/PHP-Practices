

<?php
$myfile=fopen("abc.php","r") or die("unable to open the file");
echo fread($myfile,filesize("abc.php"));
?>
