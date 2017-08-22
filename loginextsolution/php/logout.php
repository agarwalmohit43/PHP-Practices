<?php
session_start();
unset($_SESSION['userid']);
session_destroy();
echo "<script>window.location.href='../index.php'</script>";
?>