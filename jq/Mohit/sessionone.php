<?php
//session_start();
include 'sessiontwo.php'
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
session_destroy();
?>

</body>
</html>
