<?php

session_start();

?>
<html><head><title>Mohit Session 1</title></head><body>

<?php
if(isset($_SESSION["aa"])){
    echo $_SESSION["aa"];
}else{
    echo "invalid session";
}
?>
<button type="button" onclick="<?php session_destroy()?>">Logout</button>

</body></html>
