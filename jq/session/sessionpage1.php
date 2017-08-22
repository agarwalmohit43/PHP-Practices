<?php

session_start();

?>
<html><head><title>Mohit Session 1</title></head><body>

<?php

$_SESSION["aa"]=session_id();
echo $_SESSION["aa"];
?>


</body></html>
