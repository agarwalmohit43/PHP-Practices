<?php
ob_start();
session_start();

?>

<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"]='blue';
$_SESSION["favanimal"]='red';
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>